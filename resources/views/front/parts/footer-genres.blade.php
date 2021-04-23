<ul>
	@foreach ($genres as $genre)
		{{-- {{ dump($genre->slug) }} --}}
		{{-- <li><a href="{{ route('front.genre'), ['slug' => $genre->slug] }}"><span>{{ $genre->title }}</span></a></li> --}}

		<li><a href="{{ route('front.genre', $genre->slug)}}"><span>{{ $genre->title }}</span></a></li>
	@endforeach
</ul>

