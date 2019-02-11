<h2>Film Name: </h2>
<p>{{ $film->name }}</p>
<ul>
    @foreach($film->categories as $category)
    <li>{{ $category->title }}</li>
    @endforeach
</ul>
