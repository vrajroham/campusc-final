<?php

class HomeController extends BaseController {

	/**
	 * @return mixed
	 */
	public function index(){

		return View::make('home.pages.index');
	}
	public function registerCollegeAjax(){
		return View::make('home.ajax.register-educational'); //Loading Ajax View
	}
	public function registerCollege(){
		return View::make('home.pages.index');
	}
	public function collegeTerms(){
		return View::make('registration.ajax.college-terms');
	}
	public function mailtest($email="vaibhavraj.roham@gmail.com"){

		Mail::queue('home.email.new-college', array('email' => $email), function($message) {
			$message->to(array("vaibhavraj.roham@gmail.com","priyanka.mantala@gmail.com"), "Hi")->subject('Welcome again!');
		});
	}
}
