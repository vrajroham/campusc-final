<?php

class CollegeRegistration extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'college_name'=>'required|min:6',
		'registration_id'=>'required|min:6|unique:collegeregistrations,registration_id',
		'university'=>'required|min:6',
		'address'=>'required|min:6',
		'state'=>'required',
		'district'=>'required',
		'cname'=>'required|min:8',
		'mobile'=>'required|digits:10|unique:collegeregistrations,mobile',
		'email'=>'required|email|unique:collegeregistrations,email',
		'designation'=>'required|min:6',
	];
	protected $table="collegeregistrations";
	// Don't forget to fill this array
	protected $fillable = [];
	protected $guarded = array('_token','terms');

}