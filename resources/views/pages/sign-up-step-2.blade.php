@extends('layouts.default')
@section('content')
    <form action="updateUser">
        @if(isset($message))
            <p>{{$message}}</p>
        @endif
        <h4>
            Step 2
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>ID Number / Passport Number</label>
                    <input type="text" class="form-control" placeholder="Please enter your SA ID number" name="id_number" max="8">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="phone" class="form-control" placeholder="mobile number" name="mobile_number">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>PIN</label>
                    <input class="form-control" type="password" name="metadata{'pin'}" placeholder="Enter a 4 digit PIN" maxlength="4" minlength="4">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Confirm PIN</label>
                    <input class="form-control" type="password" name="pin2" placeholder="Same PIN as the one you entered above" maxlength="4" minlength="4">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
        <div class="clearfix"></div>
    </form>
@stop
