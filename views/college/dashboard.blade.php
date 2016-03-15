@extends('college.layouts.default')

@section('content')
    <div role="main" class="main">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">College</a></li>
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><i class="fa fa-dashboard"></i> College Dashboard</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-none">Welcome, <a href="#" class="active"> Sanjivani College of Engineering</a></h2>
                    <p>{Something Effective Moto goes here</p>
                    <hr class="tall">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4><i class="fa fa-tasks"></i> Manage Student Records</h4>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                        <i class="fa fa-user-plus"></i> New Submissions
                                        <label class="label label-danger pull-right">2 New Request(s)</label>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1One" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <tr class="alert alert-warning">
                                            <th>ID</th>
                                            <th>Application ID</th>
                                            <th>Name</th>
                                            <th>Submitted On</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                                        Rejected Submissions
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Two" class="accordion-body collapse">
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Application ID</th>
                                            <th>Name</th>
                                            <th>Submitted On</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Three">
                                        Re-Submitted Submissions
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Three" class="accordion-body collapse">
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Application ID</th>
                                            <th>Name</th>
                                            <th>Submitted On</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Four">
                                        Approved Submissions
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Four" class="accordion-body collapse">
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Application ID</th>
                                            <th>Name</th>
                                            <th>Submitted On</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SRES-1234</td>
                                            <td>Vaibhavraj Roham</td>
                                            <td>10-03-2016 12:41:15 AM</td>
                                            <td><a class="btn btn-sm btn-primary">Review</a> </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@stop