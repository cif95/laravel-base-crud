@extends('layouts.app')

@section('title', 'Comic Info')

@section('content')
	<section id="comic-detail" class="container-fluid px-5">
		<div class="row justify-content-center align-items-center h-75">
			<div class="col-12">
				<a href="{{ route('comics.index') }}" class="btn btn-brand" tabindex="-1" role="button" aria-disabled="true">Back</a>
			</div>
			<div class="col-2 text-center" id="comic-pic">
				<img src="{{ $comic->thumb }}" alt="Poster of {{ $comic->title }}">
			</div>
			<div class="col-5" id="comic-info">
				<h3>{{ $comic->title }}</h3>
				<span>Series: {{ $comic->series }}</span>
				<span class="ms-3">Type: {{ $comic->type }}</span>
				<p class="m-0 py-2">{{ $comic->description }}</p>
				<span class="text-danger fw-bold">Price: &euro;{{ $comic->price }}</span>
				<span class="ms-3">Sale date: {{ $comic->sale_date }}</span>
			</div>
		</div>
	</section>
@endsection