<?php

class StudentController extends BaseController {

	/**
	 * @return mixed
	 */
	public function index(){
		return View::make('student.registration');
	}
	public function create(){
		return View::make('student.create');
	}
}
