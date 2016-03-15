<?php

class StudentController extends BaseController {

	/**
	 * @return mixed
	 */
	public function index(){
		return View::make('student.dashboard');
	}
}
