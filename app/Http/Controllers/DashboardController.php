<?php namespace OpsGuru\Http\Controllers;

use GrahamCampbell\GitHub\Facades\GitHub;
use GrahamCampbell\GitHub\GitHubManager;

class DashboardController extends Controller
{
    protected $github;

    public function __construct(GitHubManager $github)
    {
        $this->github = $github;
    }

    public function index()
    {
        $user = $this->github->me()->show();

        return view('backend.dashboard.index', compact('user'));
    }
}
