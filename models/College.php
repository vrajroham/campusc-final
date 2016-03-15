<?php

class College extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'excelfile'            => 'required|mimes:xls,xlsx',
	];
	protected $table="college";
	// Don't forget to fill this array
	protected $fillable = [];
	protected $guarded = [];

}