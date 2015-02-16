<?php namespace OpsGuru\Http\Controllers;


use Auth;
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

        \Session::put('access_token', $user->token);

        $opsUser = User::firstOrCreate([
            'username' => $user->getNickName(),
            'email' => $user->getEmail(),
            'avatar' => $user->getAvatar(),
            'access_token' => $user->token
        ]);
        Auth::login($opsUser);
        Auth::check() ? $authenticated = true : $authenticated = false;

        return view('dash', compact('user', 'authenticated'));

    }

}
