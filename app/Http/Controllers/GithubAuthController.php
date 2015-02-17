<?php namespace OpsGuru\Http\Controllers;


use Auth;
use GrahamCampbell\GitHub\Facades\GitHub;
use Socialize;
use OpsGuru\User;

class GithubAuthController extends Controller{

    public function login()
    {

      return Socialize::with('github')->scopes(['user', 'repo', 'gist'])->redirect();

    }

    /**
     * Handle the callback -
     * log in or create the auth'd user
     * TODO: team check foxycart
     *
     * @return \Illuminate\View\View
     */
    public function handleProviderCallback()
    {
        $user = Socialize::with('github')->user();

        info("handling provider callback");
        info($user->getName() . " | " . $user->getNickName());
        info("Token: " . $user->token);

        $orgs = Github::me()->organizations();

        foreach($orgs as $org)
        {
            info("Orgs test: " . $org['login']);
            if($org['login'] === 'FoxyCart')
            {
                info('FoxyCart user verified...');
                $opsUser = User::firstOrCreate([
                    'username' => $user->getNickName(),
                    'email' => $user->getEmail(),
                    'avatar' => $user->getAvatar(),
                    'access_token' => $user->token
                ]);
                Auth::login($opsUser);
            }
        }

        \Session::put('access_token', $user->token);

        Auth::check() ? $authenticated = true : $authenticated = false;

        return view('dash', compact('user', 'authenticated'));

    }

}
