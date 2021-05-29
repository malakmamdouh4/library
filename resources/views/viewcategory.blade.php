
@extends('layouts.app')

@section('content')

    <div class="panel panel-default" style="background-color: white ; margin: 40px 10px">
        <div class="panel-heading text-center" style="padding: 10px ; font-size: 17px ; font-weight: 700">{{$category->name}}</div>
        <hr style="margin-top: 0">
        <div class="panel-body">
            @if (count($books) > 0)
                @foreach($books as $book)
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-responsive"
                                 style="width: 250px ; height:300px ; margin: 20px"/>
                        </div>
                        <!-- /.col-md-12 -->
                        <div class="col-md-9 text-center" style="margin-top: 40px">
                            <h2>{{$book->title}}</h2>
                            <p>{{$book->info}}</p>
                            <br/>
                            Author : {{$book->author}} <br/>
                            <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download</a>
                            <a href="{{route('book',$book->id)}}" class="btn btn-info">More info</a>
                        </div>
                        <!-- /.col-md-9 -->
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </div>

@endsection
