@extends('layouts.app')

@section('title', 'Comic Info')

@section('content')
	<section id="comic-detail">
		<a href="{{ route('comics.index') }}">
			<button>Back</button>
		</a>
		<h1>Comic detail</h1>
		@dump($comic)
	</section>
@endsection