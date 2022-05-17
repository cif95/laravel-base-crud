@extends('layouts.app')

@section('title', 'Comics')

@section('content')
	<section id="comics">
		<h2>Comics:</h2>
		<ul>
			@foreach ($comics as $comic)
				<li>
					<a href="{{ route('comics/detail', [ 'id' => $comic->id ] ) }}">
						{{ $comic->title }}
					</a>
				</li>
			@endforeach
		</ul>
	</section>
@endsection