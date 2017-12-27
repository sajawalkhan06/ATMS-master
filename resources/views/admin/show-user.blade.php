@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>{{$user->name}}</h1>
@stop

@section('content')
 
<p>Welcome to the Show specific User page</p>

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">Profile</a></li>
        <li><a href="#devices" data-toggle="tab">Devices</a></li>
        <li><a href="#account" data-toggle="tab">Account</a></li>
    </ul>
    <div class="tab-content">
        <div class="active tab-pane" id="activity">

        </div>
        <div class="tab-pane" id="devices">
            @if(count($devices)>0)
            <table class="table table-bordered table-hover">
                <thead><h4>Registered Devices</h4></thead>
                <th>Device Id</th>
                <th>Device Name</th>
                <th>Device Key</th>
                <tbody>
                @foreach($devices as $device)
                    <tr>
                        <td>{{ $device->id }}</td>
                        <td>{{ $device->device_name }}</td>
                        <td>{{ $device->device_key }}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            @else
                <h4 class="text-center text-info text">This user has no registered devices!</h4>                        
            @endif
        </div>
        <div class="tab-pane" id="account">

        </div>
    </div>
</div>
 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/CustomeStyles.css') }}">
@stop
