
<div class="panel panel-default" style="background-color: white ; margin: 40px ; padding: 10px">
    <div class="panel-heading text-center" style="font-size: 17px">Categories</div>
    <hr style="margin-top: 0">
    <div class="panel-body">
        @if (count($allcategories) > 0)
            <ul class="nav">
                @foreach($allcategories as $category)
                    <li class="nav-item" style="width: 100% ;">
                        <a class="nav-link" style="padding: 4px" href="{{route('category',$category->id)}}">{{$category->name}}</a> </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
