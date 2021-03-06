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
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="col-md-4 control-label">E-Mail Address</label>
						<div class="col-md-8">
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-8">
							<input type="password" class="form-control" name="password">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Remember Me
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Login</button>

							<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-2" style="padding-top: 40px; padding-left: 75px;">
				<h1>or</h1>
			</div>

			<!-- register -->
			<div class="col-lg-5">
				<h3>Register</h3>
				<a class="btn btn-success" href="/welcome/register">Click here to get an account</a>
			</div>

		</div>
	</div>
</div>
@endsection
