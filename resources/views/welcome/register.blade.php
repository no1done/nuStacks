@extends('layouts.welcome')

@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron text-center" style="background-image: url('/img/jumbo2.jpg'); background-repeat: no-repeat; background-position: bottom;">
                        <h1 class="press">Welcome Aboard! .. Almost </h1>
                        <p>We just need some details to make your account ...</p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                </div>
            </div>

            <div class="row">
                <!-- register -->
                <div class="col-lg-5">
                    <p>
                        <a href="/welcome">Here by accident? Click here to go back</a>
                    </p>
                    {!! Form::open(['url' => 'welcome/register']) !!}
                        <div class="form-group">
                            {!! Form::text('name', Input::old('name'), ['class' => 'form-control', 'placeholder' => "Full Name", 'required' => "required"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::email('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => "Valid Email Address", 'required' => "required"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::email('email_confirmation', Input::old('email_confirmation'), ['class' => 'form-control', 'placeholder' => "Confirm your email address..", 'required' => "required"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => "Password", 'required' => "required"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => "Confirm your password..", 'required' => "required"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Desired profile link</label>
                            <div class="input-group">
                            <span class="input-group-addon">@</span>
                            {!! Form::text('unique_link', Input::old('unique_link'), ['class' => 'form-control', 'placeholder' => "johndoe", 'required' => "required"]) !!}
                          </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="final_submit" class="btn btn-primary">Sign me up!</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
@endsection
