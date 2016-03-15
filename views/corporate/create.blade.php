@extends('corporate.layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <?php
            if(Request::session()->get("status")!=null){
                echo '<div class="col-md-offset-4 col-md-4 alert alert-warning text-center">';
                echo '<a class="close" data-dismiss="alert" href="#">&times;</a>';
                echo Request::session()->get("status");
                echo '</div>';
            }
            foreach($errors as $e){
                echo $e;
            }
            ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="featured-boxes">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="featured-box featured-box-primary align-left mt-xlg">
                                <div class="box-content">
                                    <h4 class="heading-primary text-center text-uppercase mb-md">Register An Institute</h4>
                                    <section class="panel form-wizard" id="w3">
                                        <div class="panel-body">
                                            <div class="wizard-progress">
                                                <div class="steps-progress">
                                                    <div class="progress-indicator"></div>
                                                </div>
                                                <ul>
                                                    <li class="active">
                                                        <a href="#w3-account" data-toggle="tab"><span>1</span>College Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="#w3-profile" data-toggle="tab"><span>2</span>College Address</a>
                                                    </li>
                                                    <li>
                                                        <a href="#w3-billing" data-toggle="tab"><span>3</span>Contact Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="#w3-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                                {{Form::open(array('route'=>'collegeRegistrations.store','class'=>'form-horizontal','novalidate'=>'novalidate'))}}
                                                <div class="tab-content">
                                                    <div id="w3-account" class="tab-pane active" style="margin-bottom: 100px;">
                                                        <div class="col-md-4">
                                                            {{Form::label('college_name',"INSTITUTE NAME",array('class'=>'control-label ','for'=>'w3-insttitutename'))}}
                                                            <div class="form-group input-group">
                                                                <span class="input-group-addon btn-default"><i class="fa fa-institution"></i> </span>
                                                                {{Form::text('college_name',null,array('placeholder'=>'E.g. Sanjivani College of Engineering','class'=>'form-control','id'=>'w3-insttitutename','required','minlength'=>10))}}
                                                                {{$errors->first("college_name","<p class='text-danger'>:message</p>")}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-offset-1 col-md-2">
                                                            {{Form::label('registration_id',"REGISTRATION NO.",array('class'=>'control-label ','for'=>'w3-registrationno'))}}
                                                            <div class="form-group input-group">
                                                                <span class="input-group-addon btn-default"><i class="fa fa-pencil"></i></span>
                                                                {{Form::text('registration_id',null,array('placeholder'=>'E.g. AICTE123','class'=>'form-control','id'=>'w3-registrationno','required','minlength'=>'6'))}}
                                                                {{$errors->first("registration_id","<p class='text-danger'>:message</p>")}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-offset-1 col-md-4">
                                                            {{Form::label('university',"UNIVERSITY NAME",array('class'=>'control-label ','for'=>'w3-university'))}}
                                                            <div class="form-group input-group">
                                                                <span class="input-group-addon btn-default"><i class="fa fa-star"></i> </span>
                                                                {{Form::text('university',null,array('placeholder'=>'E.g. University of Pune','class'=>'form-control','id'=>'w3-university','required','minlength'=>'6'))}}
                                                                {{$errors->first("university","<p class='text-danger'>:message</p>")}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="w3-profile" class="tab-pane">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                {{Form::label('address',"ADDRESS",array('class'=>'control-label ','for'=>'w3-address'))}}
                                                                <div class="form-group input-group">
                                                                    <span class="input-group-addon btn-default"><i class="fa fa-location-arrow"></i> </span>
                                                                    {{Form::textarea('address',null,array('placeholder'=>'E.g. Address of Institute','class'=>'form-control','id'=>'w3-address','required','minlength'=>'6','rows'=>3))}}
                                                                    {{$errors->first("address","<p class='text-danger'>:message</p>")}}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-offset-1 col-md-4">
                                                                {{Form::label('state',"STATE",array('class'=>'control-label ','for'=>'w3-state'))}}
                                                                <div class="form-group input-group">
                                                                    <span class="input-group-addon btn-default"><i class="fa fa-location-arrow"></i> </span>
                                                                    {{Form::text('state',null,array('placeholder'=>'E.g. State Name','class'=>'form-control','id'=>'w3-state','required','minlength'=>'6','rows'=>3))}}
                                                                    {{$errors->first("state","<p class='text-danger'>:message</p>")}}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-offset-1 col-md-4">
                                                                {{Form::label('district',"DISTRICT",array('class'=>'control-label ','for'=>'w3-district'))}}
                                                                <div class="form-group input-group">
                                                                    <span class="input-group-addon btn-default"><i class="fa fa-location-arrow"></i> </span>
                                                                    {{Form::text('district',null,array('placeholder'=>'E.g. District Name','class'=>'form-control','id'=>'w3-district','required','minlength'=>'6','rows'=>3))}}
                                                                    {{$errors->first("district","<p class='text-danger'>:message</p>")}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="w3-billing" class="tab-pane">
                                                        <div class="col-md-offset-1 col-md-4">
                                                            {{Form::label('cname',"CONTACT PERSON NAME",array('class'=>'control-label ','for'=>'w3-cname'))}}
                                                            <div class="form-group input-group">
                                                                <span class="input-group-addon btn-default"><i class="fa fa-user"></i> </span>
                                                                {{Form::text('cname',null,array('placeholder'=>'E.g. John Doe','class'=>'form-control','id'=>'w3-cname','required','minlength'=>'6'))}}
                                                                {{$errors->first("cname","<p class='text-danger'>:message</p>")}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-offset-1 col-md-4">
                                                            {{Form::label('mobile',"MOBILE",array('class'=>'control-label ','for'=>'w3-cname'))}}
                                                            <div class="form-group input-group">
                                                                <span class="input-group-addon btn-default">  +91 </span>
                                                                {{Form::text('mobile',null,array('placeholder'=>'E.g. 9876543210','class'=>'form-control','id'=>'w3-mobile','required','minlength'=>'10','maxlength'=>10))}}
                                                                {{$errors->first("mobile","<p class='text-danger'>:message</p>")}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-offset-1 col-md-4">
                                                            {{Form::label('email',"EMAIL ADDRESS",array('class'=>'control-label ','for'=>'w3-email'))}}
                                                            <div class="form-group input-group">
                                                                <span class="input-group-addon btn-default"> @ </span>
                                                                {{Form::email('email',null,array('placeholder'=>'E.g. johndoe@example.com','class'=>'form-control','id'=>'w3-state','required','minlength'=>'6'))}}
                                                                {{$errors->first("email","<p class='text-danger'>:message</p>")}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-offset-1 col-md-4">
                                                            {{Form::label('designation',"DESIGNATION",array('class'=>'control-label ','for'=>'w3-designation'))}}
                                                            <div class="form-group input-group">
                                                                <span class="input-group-addon btn-default"><i class="fa fa-user-secret"></i> </span>
                                                                {{Form::text('designation',null,array('placeholder'=>'E.g. Principal','class'=>'form-control','id'=>'w3-designation','required','minlength'=>'6'))}}
                                                                {{$errors->first("designation","<p class='text-danger'>:message</p>")}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="w3-confirm" class="tab-pane">
                                                        <div class="form-group">
                                                            <div class="alert alert-warning">
                                                                <strong>You must agree all terms and conditions!</strong><br> Please read all terms and conditions carefully before submitting the record.
                                                                <br><br><a href="collegeTerms" class="alert-link" data-ajax-on-modal>Terms & Conditions of Services</a>.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-3"></div>
                                                            <div class="col-sm-9">
                                                                <div class="checkbox-custom">
                                                                    <input type="checkbox" name="terms" id="w3-terms" required>
                                                                    <label for="w3-terms">I agree to the terms of service</label>
                                                                </div>
                                                                <input type="submit" value="Create">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {{Form::close()}}
                                        </div>
                                        <div class="panel-footer">
                                            <ul class="pager">
                                                <li class="previous disabled">
                                                    <a><i class="fa fa-angle-left"></i> Previous</a>
                                                </li>
                                                <li class="finish hidden pull-right">
                                                    <a>Finish</a>
                                                </li>
                                                <li class="next">
                                                    <a>Next <i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </section>
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