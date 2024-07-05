@extends('layouts.app')
@section('content')

    <div class="main-wrapper">
        <div class="account-content">
            {{-- <a href="{{ route('form/job/list') }}" class="btn btn-primary apply-btn">Apply Job</a> --}}
        <div class="container">
                <button class="btn btn-primary" id="loginButton" data-toggle="modal" data-target="#loginModal" >Login</button>

  <!-- Modal -->
  <div id="loginModal" class="modal">
    <span class="loginClose">&times;</span> <!-- Close button -->
    <div class="container">
    {{-- message --}}
    {!! Toastr::message() !!}
    <!-- /Account Logo -->
<div class="account-box">
    <div class="account-wrapper">
        <h3 class="account-title">Login</h3>
            <p class="account-subtitle">Access to our dashboard</p>
    <!-- Account Form -->
<form id="loginForm" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label>Password</label>
            </div>
        </div>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label></label>
            </div>
            <div class="col-auto">
                <a class="text-muted" href="{{ route('forget-password') }}">
                    Forgot password?
                </a>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary account-btn" type="submit">Login</button>
    </div>
    <div class="account-footer">
        <p>Don't have an account yet? <a href="{{ route('register') }}">Register</a></p>
    </div>
</form>
<!-- /Account Form -->
</div>
</div>
</div>
</div>

</div>
</div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // JavaScript to close the modal when clicking the &times; button
    $(document).ready(function() {
        $('.modal .loginClose').click(function() {
            $('#loginModal').modal('hide');
        });
    });
</script>
