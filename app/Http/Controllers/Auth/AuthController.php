<?php namespace App\Http\Controllers\Auth; //if call things from other namespaces, needs fully qualified name.

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;  //use 'use' to do alias. now Controller, Guard, Registrar, and AuthenticatesAndRegistersUsers can be used as aliases.

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

    protected $redirectTo='/articles';
	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar) //registrar is an interface here. the one passed in is App/Services/Registrar.php
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}


    public function getFoo()
    {
        return 'foobar';
    }

//post to http://localhost:8000/auth/bar
    public function postBar()
    {
        return 'bar';
    }



}
