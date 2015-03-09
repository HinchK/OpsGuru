<?php namespace OpsGuru\Http\Controllers;

use OpsGuru\Http\Requests;
use OpsGuru\Http\Controllers\Controller;
use Socialize;
use Illuminate\Http\Request;

class FoxyApiController extends Controller {

    public function redirectToProvider()
    {
        //https://api-sandbox.foxycart.com/oauth/authorize.php?response_type=code&client_id=client_WPglpxRD15Iaby1ihYFs
        return Socialize::with('foxyapi')->scopes(['client_full_access','user_full_access','store_full_access'])->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialize::with('foxyapi')->user();


        dd($user);
        // $user->token;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
