@extends('layouts.default')
@section('content')
    <h2>Dashboard</h2>
    <div class="panel-body">
        <table class="table user-basic-info-table">
            <tbody>
            <tr>
                <th width="45%">First name</th>
                <td ng-bind="user.first_name" class="ng-binding">{{ array_get($user, 'first_name') }}</td>
            </tr>
            <tr>
                <th width="45%">Last name</th>
                <td ng-bind="user.last_name" class="ng-binding">{{ array_get($user, 'last_name') }}</td>
            </tr>
            <tr>
                <th width="45%">Username</th>
                <td ng-bind="user.username" class="ng-binding">{{ array_get($user, 'username') }}</td>
            </tr>
            <tr>
                <th width="45%">Nationality</th>
                <td ng-bind="user.nationality | isoCountry" class="ng-binding">{{ array_get($user, 'nationality') }}</td>
            </tr>
            <tr>
                <th width="45%">Language</th>
                <td ng-bind="user.language" class="ng-binding">{{ array_get($user, 'language') }}</td>
            </tr>
            <tr>
                <th width="45%">Date of birth</th>
                <td ng-bind="user.birth_date" class="ng-binding">{{ array_get($user, 'birth_date') }}</td>
            </tr>
            <tr>
                <th width="45%">Id number</th>
                <td ng-bind="user.id_number" class="ng-binding">{{ array_get($user, 'id_number') }}</td>
            </tr>
            <tr>
                <th width="45%">Status</th>
                <td class="ng-binding">Verified</td>
            </tr>
            </tbody>
        </table>
    </div>

    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="/logout">
        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Sign out
            </button>
        </div>
    </form>
@stop
