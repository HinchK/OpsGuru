<?php namespace OpsGuru\Http\Controllers;


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
        info($user->getName());

        return view('dash', compact('user'));

    }

}
