
@extends('college.layouts.default')
@include('student.optionscheck')
@section('content')
    <div role="main" class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Student</a></li>
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><i class="fa fa-dashboard"></i> Student Registration</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-none">Welcome, <a href="#" class="active"> Student Name</a></h2>
                    <p>Something Effective Moto goes here</p>
                    <hr class="tall">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr class="visible-sm visible-xs tall" />
                    <h4>Registration</h4>

                    <div class="toggle toggle-primary" data-plugin-toggle data-plugin-options='{ "isAccordion": true }'>
                        <section class="toggle active">
                            <label>Basic Information</label>
                            <div class="toggle-content">
                                <div class="container">
                                    <form class="form-horizontal form-bohiirdered" method="get">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="studentname">Name</label>

                                                    {{Form::text('student_name',null,array('placeholder'=>'E.g. ABCD XYZ','class'=>'form-control','id'=>'w3-studentname','required','minlength'=>6))}}
                                                    {{$errors->first("college_name","<p class='text-danger'>:message</p>")}}

                                            </div>

                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="studentmail">Email</label>
                                                    {{Form::email('student_email',null,array('placeholder'=>'E.g.abcd@example.com','class'=>'form-control',
                                                    'id'=>'w3-studentemail','required','minlength'=>6))}}
                                                    {{$errors->first("college_name","<p class='text-danger'>:message</p>")}}

                                            </div>

                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="institutename">Institute Name</label>
                                                {{Form::text('institutename',null,array('placeholder'=>'E.g.Sanjivani College of Engineering','class'=>'form-control',
                                                    'id'=>'w3-institutename','required','minlength'=>10))}}
                                                    {{$errors->first("college_name","<p class='text-danger'>:message</p>")}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>Personal Details</label>
                            <div class="toggle-content">
                                <div class="container">
                                    <form class="form-horizontal form-bordered" method="get">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="studentmobile">Mobile No.</label>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon btn-default">  +91 </span>
                                                    {{Form::text('studentmobile',null,array('placeholder'=>'E.g. 9876543210',
                                                    'class'=>'form-control','id'=>'w3-studentmobile','required','minlength'=>'10',
                                                    'maxlength'=>10))}}
                                                    {{$errors->first("studentmobile","<p class='text-danger'>:message</p>")}}
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="studentaddress">Address</label>

                                                    {{Form::textarea('studentaddress',null,array('placeholder'=>'E.g. Your Address',
                                                    'class'=>'form-control','id'=>'w3-studentaddress','required','minlength'=>'12','rows'=>3))}}
                                                    {{$errors->first("studentaddress","<p class='text-danger'>:message</p>")}}
                                            </div>

                                            <div class="col-md-4">
                                                <label>Sex</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="radios" id="inlineRadioMale" value="option1" checked="checked"> Male
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="radios" id="inlineRadioFemale" value="option2"> Female
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="radios" id="inlineRadioOther" value="option3"> Other
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>Academic Details</label>
                            <div class="toggle-content">
                                <div class="col-md-12">
                                    <select class="form-control">
                                        <option value="..">Select a branch</option>
                                        <option value="mechanical">Mechanical</option>
                                        <option value="entc">E&TC</option>
                                        <option value="computer">Computer</option>
                                        <option value="it">IT</option>
                                        <option value="civil">Civil</option>
                                        <option value="chemical">Chemical</option>
                                    </select>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tabs tabs-vertical">
                                                <ul class="nav nav-tabs col-sm-3">
                                                    <li class="active">
                                                        <a href="#sscmarks" data-toggle="tab">SSC Marks</a>
                                                    </li>
                                                    <li>
                                                        <a href="#hscmarks" data-toggle="tab">HSC Marks</a>
                                                    </li>
                                                    <li>
                                                        <a href="#diploma" data-toggle="tab">Diploma</a>
                                                    </li>
                                                    <li>
                                                        <a href="#engineering" data-toggle="tab">Engineering</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="sscmarks" class="tab-pane active">
                                                        <div class="form-group">
                                                            <div class="col-md-4">
                                                                <label class="control-label">Total Marks Obtained</label>
                                                                <input type="text" min="3" maxlength="3">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="control-label">Total Maximum Marks</label>
                                                                <input type="text" min="3" maxlength="3">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="control-label">Equivalent %</label>
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="hscmarks" class="tab-pane">
                                                        <div class="col-md-12">
                                                            <label>Have you done XII?</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="radio-inline" for="chkYes">
                                                                    <input type="radio" name="chkhsc" id="chkYes" value="option1"> Yes
                                                                </label>
                                                                <label class="radio-inline" for="chkNo">
                                                                    <input type="radio" name="chkhsc" id="chkNo" value="option2"> No
                                                                </label>
                                                                <hr/>
                                                                <div id="details" style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="diploma" class="tab-pane">
                                                        <div class="col-md-12">
                                                            <label>Have you done Diploma?</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="radio-inline" for="chkY">
                                                                    <input type="radio" name="chkdiploma" id="chkY" value="option1"> Yes
                                                                </label>
                                                                <label class="radio-inline" for="chkN">
                                                                    <input type="radio" name="chkdiploma" id="chkN" value="option2"> No
                                                                </label>
                                                                <hr/>
                                                                <div id="diplomadetails" style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="engineering" class="tab-pane">
                                                        <div class="col-md-12">
                                                            <label>Admission through Diploma or 12th?</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="radio-inline" for="chkdiploma1">
                                                                    <input type="radio" name="chkadmission" id="chkdiploma1" value="option1">Diploma
                                                                </label>
                                                                <label class="radio-inline" for="chkhsc1">
                                                                    <input type="radio" name="chkadmission" id="chkhsc1" value="option2">12th
                                                                </label>
                                                                <hr/>
                                                                <div id="admissiondetails1" style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Second Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Third Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Final Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="admissiondetails2" style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>First Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Second Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Third Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Final Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>Other Detials</label>
                            <div class="toggle-content">

                            </div>
                        </section>
                    </div>
                </div>

            </div>
            <hr class="tall" />
        </div>
    </div>
@stop