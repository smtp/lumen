@extends('layouts.default')
@section('content')
    <div class="header">
        <h4 class="title">Sign In</h4>
    </div>
    <form action="/auth">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Please enter your email address" name="user">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Please enter your password" value="password" name="password">
                </div>
            </div>
        </div>

        {{--<div class="text-right p-t-13 p-b-23">--}}
                {{--<span class="txt1">--}}
                    {{--Forgot--}}
                {{--</span>--}}

            {{--<a href="#" class="txt2">--}}
                {{--Username / Password?--}}
            {{--</a>--}}
        {{--</div>--}}

        <button type="submit" class="btn btn-info btn-fill pull-right">Login</button>
        <div class="clearfix"></div>

        <div class="flex-col-c p-t-170 p-b-40">
                <span class="txt1 p-b-9">
                    Don’t have an account?
                </span>

            <a href="{{ route('pages.sign-up') }}" class="txt3">
                Sign up now
            </a>
        </div>
    </form>
@stop
