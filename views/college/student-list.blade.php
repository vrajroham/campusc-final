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
                <div class="col-md-12">
                    {{ Datatable::table()
                    ->addColumn('id','Name')       // these are the column headings to be shown
                    ->setUrl(route('college.list'))   // this is the route where data will be retrieved
                    ->render() }}
                </div>

            </div>
        </div>
    </div>
    </div>
@stop