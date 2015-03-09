<?php namespace OpsGuru\Http\Controllers;

use Auth;
use GrahamCampbell\GitHub\Facades\GitHub;
use OpsGuru\Repositories\UserRepository;
use Socialize;

class GithubAuthController extends Controller
{
    public function login()
    {
        info("authenticating with GitHub via Socialize");

        return Socialize::with('github')->scopes(['user', 'repo', 'gist'])->redirect();
    }

    /**
     * Handle the callback -
     * log in or create the auth'd user.
     *
     * @return \Illuminate\View\View
     */
    public function handleProviderCallback(UserRepository $repository)
    {
        $user = Socialize::with('github')->user();

        info("handling provider callback");
        info($user->getName()." | ".$user->getNickName());
        info("Token: ".$user->token);

        $orgs = Github::me()->organizations();

        foreach ($orgs as $org) {
            info("Github Orgs lookup: ".$org['login']);
            if ($org['login'] === 'FoxyCart') {
                info('FoxyCart user verified...');
                $opsUser = $repository->findByUsernameOrCreate($user);
                Auth::login($opsUser);
            }
        }

        \Session::put('access_token', $user->token);

        Auth::check() ? $authenticated = true : $authenticated = false;

        return view('dash', compact('user', 'authenticated'));
    }
}
