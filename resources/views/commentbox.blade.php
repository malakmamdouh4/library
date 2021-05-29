
<div class="panel panel-default" style="background-color: white ; padding: 20px">
    <div class="panel-heading text-center" style="padding: 10px ; font-size: 18px">Comments</div>
    <hr style="margin-top: 0px">
    <div class="panel-body">
        @include('partial.alerts')
        <form action="{{route('comment',$book->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <textarea class="form-control" name="comment" placeholder="Enter Your Comment Here"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
        <hr>
        @if (count($book->comments) > 0)
            @foreach($book->comments as $comment)
                <div class="row">
                    <h3>{{$comment->user->name}}</h3>
                    <span class="text-muted" style="width: 100%">{{$comment->created_at}}</span>
                    <p>{{$comment->comment}}</p>
                </div>
                <!-- /.row -->
            @endforeach
        @endif
    </div>
</div>
