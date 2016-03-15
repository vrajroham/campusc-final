@extends('college.layouts.default')

@section('content')
    <div role="main" class="main">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">College</a></li>
                            <li class="active">Students Enrollment</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><i class="fa fa-upload"></i> Students Enrollment</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-none">Upload, <a href="#" class="active"> Excel file containing students record.</a></h2>
                    <p><a class="active" href="#"><i class="fa fa-download"></i> Download Sample Excel File</a></p>
                    <hr class="tall">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center text-primary">
                    <i class="fa fa-user-plus fa-5x" data-appear-animation="fadeInRightBig"></i>
                </div>
                <div class="col-md-6" data-appear-animation="fadeInLeftBig">
                    <div class="form-group">
                        {{Form::open(array('url'=>'/college.upload','class'=>'form-horizontal','files'=>true))}}
                        <i class="fa fa-file-excel-o text-primary"></i>
                            {{Form::label("excelfile","Select File",array("class"=>"text-primary"))}}
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="uneditable-input">
                                    <span class="fileupload-preview"></span>
                                </div>
														<span class="btn btn-default btn-file">
                                                            {{Form::file("excelfile" )}}
														</span>
                            {{$errors->first("excelfile","<p class='text-danger'>:message</p>")}}
                            {{Form::submit("Show Student List",array("class"=>"btn btn-primary "))}}
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@stop