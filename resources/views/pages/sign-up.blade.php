@extends('layouts.default')
@section('content')
    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="create">
        @if(isset($message))
            <p>{{$message}}</p>
        @endif
        <span class="login100-form-title">
            Sign up
        </span>
        <div class="wrap-input100 validate-input" data-validate = "Please enter your first name">
            <span class="focus-input100">First Name</span>
            <input class="input100" type="text" name="first_name" placeholder="FirstName">
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter your surname">
            <span class="focus-input100">Surname</span>
            <input class="input100" type="text" name="last_name" placeholder="Surname">
        </div>

        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email address">
            <span class="focus-input100">Email Address</span>
            <input class="input100" type="text" name="email" placeholder="user@prospa.co.za">
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
            <span class="focus-input100">Password</span>
            <input class="input100" type="password" name="password1" placeholder="Password">
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please re-enter password">
            <span class="focus-input100">Confirm Password</span>
            <input class="input100" type="password" name="password2" placeholder="Password">
        </div>

        <div>
            <input class="input100" type="checkbox" name="terms_and_conditions">
            <span class="focus-input100">I have read and agree to the terms and conditions</span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Sign up
            </button>
        </div>
    </form>
@stop
