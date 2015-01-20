<?php

class UserController extends \BaseController {

	public function profile(){


		return View::make('users.profile')
					->with('user',Auth::user())
					->with('title','Profile');
	}

	public function doUploadImage(){
		$file = Input::file('userimage');
		if($file != null){
			$user = Auth::user();
			try{
				$img = Image::make($file->getRealPath());
				$img->resize(320,240);
				$imagePath = 'usersImage/'.$user->email.'.jpg';
				$img->save('public/'.$imagePath);
				$user->photo = $imagePath;
			}
			catch(Exception $e){
				return Redirect::back()
						->with('error',"something went wrong! Try again.")
						->withInput();
			}
			if($user->save()){
				//Auth::logout();
				return Redirect::route('dashboard');
							//->with('success',"Account Created Successfully.Login Now.");
			}else{
				return Redirect::back()
							->with('error',"something went wrong! Try again.");
							//->withInput();
			}
		}
		return Redirect::back()
							->with('error',"something went wrong! Try again.");
				
	}
	public function doProfile(){
		$rules = [
					'name'                  => 'required|alpha_num',
					'password'              => 'required|confirmed',
					'password_confirmation' => 'required'
		];

		$data = Input::all();
		$validation = Validator::make($data,$rules);
		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}else{

			//$user = User::find(Auth::user()->id);
			$user = Auth::user();
			$user->name = $data['name'];
			$user->password = Hash::make($data['password']);
			
			//Upload Image file.
			
			if($user->save()){
				Auth::logout();
				return Redirect::route('login')
							->with('success',"Account Created Successfully.Login Now.");
			}else{
				return Redirect::back()
							->with('error',"something went wrong! Try again.")
							->withInput();
			}
		}
	}

}