
@extends('layouts.app')

@section('content')

    <div class="panel panel-default" style="background-color: white ; padding: 20px ; margin: 40px">
        <div class="panel-heading" style="font-weight: 700 ; font-size: 17px">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in !
        </div>
    </div>

@endsection





