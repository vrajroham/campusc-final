<?php

class CollegeController extends BaseController {

	/**
	 * @return mixed
	 */
	public function index(){
		return View::make('college.dashboard');
	}
	public function getfile(){
		return View::make('college.getfile');
	}
	public function upload1(){
		$file = Input::file('excelfile');
		$validator = Validator::make($data = Input::all(), College::$rules);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$destinationPath = 'upload';
		$filename = $file->getClientOriginalName();
		$upload_success = Input::file('excelfile')->move($destinationPath, $filename);
		$fileloc=$destinationPath.DIRECTORY_SEPARATOR.$filename;
		if( $upload_success ) {
			try {
				$result = Excel::selectSheetsByIndex(0)->load($fileloc,function($reader){
				})->get();
				return View::make("college.uploaded-students")->with("result",$result);
			} catch (Exception $e) {
				echo "<br>".$e->getMessage();
			}
		} else {
			echo Response::json('error', 400);
		}
	}
	public function uploadStudents(){
		return View::make("college.upload-student");
	}
	public function studentdoUpload(){
		$result=json_decode(Input::get("result"));
		foreach($result as $row){
			$email=$row->email;
			$row->token="1234";
			Mail::queue('home.email.student-activation', array('row'=>$row), function($message) use($row){
				$message->to($row->email, $row->name)->subject('Campusc Signup Link from college');
			});			
		}
		return View::make('college.dashboard');
	}
	public function studentlist(){
		return View::make("college.student-list");
	}
	public function getStudentData(){
		return Datatable::collection(CollegeRegistration::all(array('id','college_name')))
			->showColumns('id', 'college_name')
			->searchColumns('college_name','id')
			->orderColumns('id','college_name')
			->make();
	}
}
