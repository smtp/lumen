@extends('layouts.default')
@section('content')
    <form action="createUser">
        @if(isset($message))
            <p>{{$message}}</p>
        @endif
        <h4>
            Sign up
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="First name" name="first_name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Surname</label>
                    <input type="text" class="form-control" placeholder="Surname" name="last_name">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control" type="email" name="email" placeholder="user@prospa.co.za">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password1" placeholder="8 characters or more">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input class="form-control" type="password" name="password2" placeholder="Same password as the one you entered above">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input class="form-control" type="checkbox" name="terms_and_conditions">
                    <span class="focus-input100">I have read and agree to the <a href="https://www.prospa.co.za/terms-of-use" target="_blank">terms and conditions</a></span>
                </div>
            </div>
        </div>

            <button type="submit" class="btn btn-info btn-fill pull-right">Sign Up</button>
            <div class="clearfix"></div>
    </form>
@stop
