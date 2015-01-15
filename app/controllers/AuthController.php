<?php

class AuthController extends \BaseController {

	public function login()
	{
		return View::make('auth.login')
					->with('title', 'Login');
	}

	public function doLogin()
	{
		return Input::all();

	}

}