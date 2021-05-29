
@extends('adminlte::page')

@section('title', 'Add Category')

@section('content')

    <div class="box" style="background-color: white ; border-radius: 8px ; padding: 25px">
        <div class="box-header with-border" style="padding: 8px">
            <h3 class="box-title" style="display: inline-block">Add new Category</h3>
            <div class="box-tools pull-right" style="display: inline-block ; margin-left: 50px">
                <a class="btn btn-primary" href="{{route('categories.index')}}">View All Categories</a>
            </div>
        </div>
        <div class="box-body">
            <form action="{{route('categories.store')}}" method="post" >
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">
                </div>
                <div class="form-group">
                    <button type="submit" name="add" class="btn btn-primary btn-block">Add Category</button>
                </div>
            </form>
        </div>
    </div>
@stop
