<?php

class CollegeRegistrationsController extends \BaseController {

	/**
	 * Display a listing of collegeregistrations
	 *
	 * @return Response
	 */
	public function index()
	{
		/*$collegeregistrations = Collegeregistration::all();
		return View::make('collegeregistrations.index', compact('collegeregistrations'));
		*/
		return View::make('collegeregistrations.create');
	}

	/**
	 * Show the form for creating a new collegeregistration
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('collegeregistrations.create');
	}

	/**
	 * Store a newly created collegeregistration in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Collegeregistration::$rules);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		//Save in Database
		Collegeregistration::create($data);

		//Send Mail to College Authority
		Mail::queue('home.email.new-college', array('key' => 'value'), function($message) {
			$message->to(Input::get('email'), Input::get('college_name'))->subject('Welcome again!');
		});

		Request::session()->flash('status', 'Account Successfully Created! Please check your email for further details.');
		return Redirect::route('home');
	}

	/**
	 * Display the specified collegeregistration.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$collegeregistration = Collegeregistration::findOrFail($id);

		return View::make('collegeregistrations.show', compact('collegeregistration'));
	}

	/**
	 * Show the form for editing the specified collegeregistration.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$collegeregistration = Collegeregistration::find($id);

		return View::make('collegeregistrations.edit', compact('collegeregistration'));
	}

	/**
	 * Update the specified collegeregistration in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$collegeregistration = Collegeregistration::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Collegeregistration::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$collegeregistration->update($data);

		return Redirect::route('collegeregistrations');
	}

	/**
	 * Remove the specified collegeregistration from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Collegeregistration::destroy($id);

		return Redirect::route('collegeregistrations.index');
	}

}
