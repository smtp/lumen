@extends('layouts.default')
@section('content')
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Last 5 transactions</h4>
                            <p class="category">Here is a summary of your most recent transactions</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>Type</th>
                                <th>Vendor</th>
                                <th>Amount</th>
                                <th>Location</th>
                                <th>Date/Time</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Withdrawal</td>
                                    <td>Dakota Rice</td>
                                    <td>R50</td>
                                    <td>Langa</td>
                                    <td>2018-07-30 16:30:26</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>Minerva Hooper</td>
                                    <td>R12</td>
                                    <td>Langa</td>
                                    <td>2018-07-30 12:36:56</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>Sage Rodriguez</td>
                                    <td>R56</td>
                                    <td>Woodstock</td>
                                    <td>2018-07-27 01:36:26</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>Philip Chaney</td>
                                    <td>R23</td>
                                    <td>Parow</td>
                                    <td>2018-07-24 09:55:00</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>Doris Greene</td>
                                    <td>R9</td>
                                    <td>Belville</td>
                                    <td>2018-07-21 12:36:26</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
