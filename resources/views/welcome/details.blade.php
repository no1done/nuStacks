@extends('layouts.welcome')

@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron text-center" style="background-image: url('/img/jumbo2.jpg'); background-repeat: no-repeat; background-position: bottom;">
                        <h1 class="press">Almost there</h1>
                        <p>A few more things before you start stacking...</p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <?php //$status; ?>
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
                            <input type="text" name="name" class="form-control" value='<?= $post['signup_name']; ?>' readonly />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" value='<?= $post['signup_email']; ?>' readonly />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email__confirmation" class="form-control"  placeholder="Confirm your email.."/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" value='<?= $post['signup_password']; ?>' readonly />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm your password.." autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <label>Desired profile link</label>
                            <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" maxlength="40" placeholder="my-unique-link" name="unique_link">
                          </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="final_submit" class="btn btn-primary">Sign me up!</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
@endsection
