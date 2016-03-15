@extends('college.layouts.default')

@section('content')
    <div role="main" class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">College</a></li>
                            <li class="active">Uploaded students</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><i class="fa fa-user-plus"></i> Student List</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-none">Verify, <a href="#" class="active"> Students list before uploading</a></h2>
                    <hr class="tall">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   <table class="table table-condensed table-bordered text-center">
                       <tr class="alert alert-warning">
                           <th class="text-center">#</th>
                           <th class="text-center">College ID</th>
                           <th class="text-center">Name</th>
                           <th class="text-center">Email</th>
                       </tr>
                        <?php $i=1;?>
                       @foreach($result as $row)
                           <tr>
                               <td>{{$i++}}</td>
                               <td>{{$row->id}}</td>
                               <td>{{$row->name}}</td>
                               <td>{{$row->email}}</td>
                           </tr>
                       @endforeach
                   </table>
                    {{Form::open(array('url'=>'/college.student.doupload'))}}
                    {{Form::hidden("result",$result)}}
                    <p>
                    <p class="btn btn-default"><input type="checkbox" required=""/> Complete List is verified, enroll above students.</p>
                    {{Form::submit("Verified! Enroll in campusc",array("class"=>"btn btn-primary pull-right"))}}
                    </p>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    </div>
@stop