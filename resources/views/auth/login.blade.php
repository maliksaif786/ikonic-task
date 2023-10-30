@extends('layouts.app')

@section('content')
<main role="main">
      <!-- START REGISTER SECTION  -->
      <div class="container">
        <div class="login-form">
        <a class="navbar-brand" href="{{url('/')}}">
          <div class="logo">
            <img src="{{asset('frontend-theme/assets/img/logo.webp')}}" />
          </div>
        </a>
          <h4>Sign In</h4>

          <form class="form-default" role="form" action="{{ route('login') }}" method="POST">
                @csrf
            <div class="row">
            <div class="col-sm-12">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" name="email" id="email" autocomplete="off">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
            </div>
            <div class="col-sm-12">
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" id="password">
            </div>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div>
            <div class="row">
              <div class="col-12 submit-button">
                <button type="submit" class="btn btn-info btn-square">
                  Sign in
                </button>
              </div>
            </div>
          </form>
          <div class="forgot mb-2">
            <a href="#">Forgot Password?</a>
          </div>
          <div class="no-acccount">
            <p class="mr-1">
              Don't have an account? <a href="#">Create Profile</a>
            </p>
          </div>
        </div>
      </div>
      <!-- /END REGISTER SECTION -->
    </main>
@endsection
