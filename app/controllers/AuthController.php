<?php

class AuthController extends \BaseController {

	public function login()
	{
		return View::make('auth.login')
					->with('title', 'Login');
	}

	public function doLogin()
	{
		$rules = array
		(
					'email'    => 'required',
					'password' => 'required'
		);
		$allInput = Input::all();
		$validation = Validator::make($allInput, $rules);

		//dd($allInput);


		if ($validation->fails())
		{

			return Redirect::route('login')
						->withInput()
						->withErrors($validation);
		} else
		{

			$credentials = array
			(
						'email'    => Input::get('email'),
						'password' => Input::get('password')
			);

			if (Auth::attempt($credentials))
			{
				return Redirect::intended('/');
			} else
			{
				return Redirect::route('login')
							->withInput()
							->withErrors('Error in Email Address or Password.');
			}
		}
	}

}