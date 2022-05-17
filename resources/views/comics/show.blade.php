@extends('layouts.app')

@section('title', 'Comic Info')

@section('content')
	<section id="comic-detail">
		<a href="{{ route('comics.index') }}">
			<button>Back</button>
		</a>
		<h1>{{ $comic->title }}</h1>
		<p>{{ $comic->description }}</p>
		<p>{{ $comic->price }}</p>
		<p>{{ $comic->description }}</p>
		<img src="{{ $comic->thumb }}" alt="Poster of {{ $comic->title }}">
	</section>
@endsection