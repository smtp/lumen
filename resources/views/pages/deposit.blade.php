@extends('layouts.default')
@section('content')
    <div class="header">
        <h4 class="title">Withdraw funds</h4>
    </div>
    <form action="{{ route('pages.store-deposit') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label>Amount</label>
                <input type="number" class="form-control" placeholder="Please enter your amount" name="amount">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label>Deposit Method</label>
                    <select class="form-control">
                        <option value="eft" name="eft"></option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-info btn-fill pull-right">Deposit</button>
        <div class="clearfix"></div>
    </form>
@stop
