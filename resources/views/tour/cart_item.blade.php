<li class="cart_item">
    <div class="image">
        <img src="{{$tour->url_gird}}">
    </div>
    <strong>
        <a href="{{route('tour.show', $tour->id)}}">{{$tour->name}}</a> {{$total_amount}}x ${{$tour->price}}
    </strong>
    <a href="javascript:" class="action" onclick="deleteCart({{$tour->id}})"><i class="icon-trash"></i></a>
</li>
