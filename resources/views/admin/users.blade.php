
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <div class="box" style="background-color: white ; border-radius: 8px ; padding: 5px">
        <div class="box-header with-border" style="padding: 8px">
            <h3 class="box-title" style="display: inline-block">Users</h3>
            <div class="box-tools pull-right" style="display: inline-block ; margin-left: 50px">
                <a class="btn btn-primary" href="#">Add User</a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Email</td>
                </tr>
                </thead>
                @if(count($users) > 0)
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
@stop
