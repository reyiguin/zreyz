<?php
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class IpostMoController extends BaseController{

	///Viewing of Login page 
	public function login(){
		
		
		return View::make('app.frontend.login');
		
		
	}
	
	///Viewing of Login page
	public function signup(){
		return View::make('app.frontend.signup');
	}
	
	///Viewing of Login page
	public function home(){
			
		return View::make('app.frontend.home');
	}

}
?>