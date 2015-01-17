<?php

class DashboardController extends \BaseController {

	public function home(){
		return View::make('dashboard')
					->with('title','Dashboard');
	}

}