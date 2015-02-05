<?php namespace OpsGuru\Http\Controllers;


use Socialize;
use Symfony\Component\HttpFoundation\Request;

class GithubAuthController extends Controller{

    public function login()
    {

      return Socialize::with('github')->scopes(['user', 'repo', 'gist'])->redirect();

    }

    public function handleProviderCallback()
    {
        $user = Socialize::with('github')->user();

        \Debugbar::warn("handling provider callback");
        \Debugbar::warn($user->getName());

        return view('dash', compact('user'));

    }

}
