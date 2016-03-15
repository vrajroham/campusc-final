<?php

class AdminController extends BaseController {

	/**
	 * @return mixed
	 */
	public function index(){
		return View::make('home.pages.index');
	}
}
