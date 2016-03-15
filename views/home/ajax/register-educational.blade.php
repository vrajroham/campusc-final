<div class="ajax-container">
	<div class="row">
		<div class="col-md-12">
			<div class="portfolio-title">
				<div class="row">

					<div class="col-md-offset-1 col-md-10 center">
						<h2 class="mb-none">College Registration</h2>
					</div>
					<div class="portfolio-nav-all col-md-1">
						<a href="#" data-ajax-portfolio-close data-tooltip data-original-title="Close"><i class="fa fa-close"></i></a>
					</div>
					<!--<div class="portfolio-nav col-md-1">
						<a href="#" data-ajax-portfolio-prev class="portfolio-nav-prev" data-tooltip data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
						<a href="#" data-ajax-portfolio-next class="portfolio-nav-next" data-tooltip data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
					</div>-->
				</div>
			</div>

			<hr class="tall">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 text-center"><br>
			<i class="fa fa-institution fa-5x"></i>
			<div class="heading heading-primary  heading-border heading-bottom-border">
				<br>
				<h3>New <strong>Institute</strong></h3>
			</div>
		</div>
		<div class="col-md-8">
			<section class="panel form-wizard" id="w3">

				<div class="panel-body">
					<div class="wizard-progress">
						<div class="steps-progress">
							<div class="progress-indicator"></div>
						</div>
						<ul>
							<li class="active">
								<a href="#w3-account" data-toggle="tab"><span>1</span>Account Info</a>
							</li>
							<li>
								<a href="#w3-profile" data-toggle="tab"><span>2</span>Profile Info</a>
							</li>
							<li>
								<a href="#w3-billing" data-toggle="tab"><span>3</span>Billing Info</a>
							</li>
							<li>
								<a href="#w3-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
							</li>
						</ul>
					</div>
					<form class="form-horizontal" novalidate="novalidate">
						<div class="tab-content">
							<div id="w3-account" class="tab-pane active">
								<div class="form-group">
									<label class="col-sm-4 control-label" for="w3-username">Username</label>
									<div class="col-sm-8">
										{{Form::text('username',null,array('placeholder'=>'Username','class'=>'form-control input-sm','id'=>'w3-username','required'))}}
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label" for="w3-password">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control input-sm" name="password" id="w3-password" minlength="6" required>
									</div>
								</div>
							</div>
							<div id="w3-profile" class="tab-pane">
								<div class="form-group">
									<label class="col-sm-4 control-label" for="w3-first-name">First Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-sm" name="first-name" id="w3-first-name">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label" for="w3-last-name">Last Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-sm" name="last-name" id="w3-last-name">
									</div>
								</div>
							</div>
							<div id="w3-billing" class="tab-pane">
								<div class="form-group">
									<label class="col-sm-4 control-label" for="w3-cc">Card Number</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-sm" name="cc-number" id="w3-cc" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label" for="inputSuccess">Expiration</label>
									<div class="col-sm-4">
										<select class="form-control input-sm" name="exp-month" required>
											<option>January</option>
											<option>February</option>
											<option>March</option>
											<option>April</option>
											<option>May</option>
											<option>June</option>
											<option>July</option>
											<option>August</option>
											<option>September</option>
											<option>October</option>
											<option>November</option>
											<option>December</option>
										</select>
									</div>
									<div class="col-sm-4">
										<select class="form-control input-sm" name="exp-year" required>
											<option>2014</option>
											<option>2015</option>
											<option>2016</option>
											<option>2017</option>
											<option>2018</option>
											<option>2019</option>
											<option>2020</option>
											<option>2021</option>
											<option>2022</option>
										</select>
									</div>
								</div>
							</div>
							<div id="w3-confirm" class="tab-pane">
								<div class="form-group">
									<label class="col-sm-4 control-label" for="w3-email">Email</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-sm" name="email" id="w3-email" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-3"></div>
									<div class="col-sm-9">
										<div class="checkbox-custom">
											<input type="checkbox" name="terms" id="w3-terms" required>
											<label for="w3-terms">I agree to the terms of service</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
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
<!-- Admin Extension Specific Page Vendor -->
<script src="{{url('assets')}}/admin/assets/vendor/jquery-validation/jquery.validate.js"></script>
<script src="{{url('assets')}}/admin/assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="{{url('assets')}}/admin/assets/vendor/pnotify/pnotify.custom.js"></script>

<!-- Admin Extension -->
<script src="{{url('assets')}}/admin/assets/javascripts/theme.admin.extension.js"></script>

<!-- Admin Extension Examples -->
<script src="{{url('assets')}}/admin/assets/javascripts/forms/examples.wizard.js"></script>