@extends('layouts.app')

@section('title', 'Comic Info')

@section('content')
	<section id="comic-detail" class="container-fluid px-5">
		<div class="row">
			<div class="col-12 my-4">
				<a href="{{ route('comics.index') }}" class="btn btn-brand" tabindex="-1" role="button" aria-disabled="true">Back</a>
			</div>
			<div class="col-5 text-center">
				<img src="{{ $comic->thumb }}" alt="Poster of {{ $comic->title }}" class="mx-auto w-50">
			</div>
			<div class="col-5">
				<h1>{{ $comic->title }}</h1>
				<p>Series: {{ $comic->series }}</p>
				<p>{{ $comic->description }}</p>
				<p>Type: {{ $comic->type }}</p>
				<p class="text-danger">Price: &euro;{{ $comic->price }}</p>
				<p>Sale date: {{ $comic->sale_date }}</p>
			</div>
		</div>
	</section>
@endsection