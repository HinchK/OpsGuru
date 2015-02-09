<?php namespace OpsGuru\Http\Controllers;


use Auth;
use Socialize;

class GithubAuthController extends Controller{

    public function login()
    {

      return Socialize::with('github')->scopes(['user', 'repo', 'gist'])->redirect();

    }

    public function handleProviderCallback()
    {
        $user = Socialize::with('github')->user();

        info("handling provider callback");
        info($user->getName() . " | " . $user->getNickName());

        Auth::check() ? $authenticated = true : $authenticated = false;

        return view('dash', compact('user', 'authenticated'));

    }

}
