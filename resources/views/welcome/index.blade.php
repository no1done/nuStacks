@extends('layouts.welcome')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="jumbotron text-center" style="background-image: url('/img/jumbo2.jpg'); background-repeat: no-repeat; background-position: bottom;">
			<h1 class="press">Welcome to nuStacks</h1>
			<p>Share what you want, with who <strong>you</strong> want. </p>
			<p>Put your social connections under your control.</p>
			<p>Stacking your connections will allow you to control what they see, <br>what you see and how you interact.</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<?php //$status; ?>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<!-- login -->
			<div class="col-lg-5">
				<h3>Sign in</h3>
				<form action="" method="POST">
					<div class="form-group">
						<input type="text" name="login_email" class="form-control" placeholder="Email" />
					</div>
					<div class="form-group">
						<input type="password" name="login_password" class="form-control" placeholder="Password" />
					</div>
					<div class="form-group">
						<button type="submit" name="login_submit" class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>

			<div class="col-lg-2" style="padding-top: 40px; padding-left: 75px;">
				<h1>or</h1>
			</div>

			<!-- register -->
			<div class="col-lg-5">
				<h3>Register</h3>
				{!! Form::open(['url' => 'welcome/details']) !!}
					<div class="form-group">
						{!! Form::text('signup_name', Input::old('signup_name'), ['class' => 'form-control', 'placeholder' => "Full Name"]) !!}
					</div>
					<div class="form-group">
						{!! Form::email('signup_email', Input::old('signup_email'), ['class' => 'form-control', 'placeholder' => "Email"]) !!}
					</div>
					<div class="form-group">
						{!! Form::password('signup_password', ['class' => 'form-control', 'autocomplete' => "off", 'placeholder' => "Password"]) !!}
					</div>
					<div class="form-group">
						<button type="submit" name="signup_submit" class="btn btn-success pull-right">Continue</button>
					</div>
				{!! Form::close() !!}
			</div>

		</div>
	</div>
</div>
@endsection
