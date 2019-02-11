
@foreach($x as $xx)

	<p><a href="{{route('showcat', $xx->id)}}" >{{$xx->title}}</a></p>
<hr>
@endforeach

 <!--    
 @foreach($category as $category)
    <li>{{ $category->title }}</li>
    @endforeach
</ul>
 -->