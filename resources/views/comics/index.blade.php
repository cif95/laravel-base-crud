@extends('layouts.app')

@section('title', 'Comics')

@section('content')
	<section id="comics">
		<h2>Comics:</h2>
		<a href="{{ route('comics.create')}}">
			<button>Add New Comic</button>
		</a>
		<ul>
			@foreach ($comics as $comic)
				<li>
					<a href="{{ route('comics.show', $comic->id ) }}">
						{{ $comic->title }}
					</a>
				</li>
			@endforeach
		</ul>
	</section>
@endsection