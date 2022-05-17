@extends('layouts.app')

@section('title', 'Add Comic')

@section('content')

<section class="container-fluid p-5" id="add-form">

	<div class="row">
		<div class="col-12 mb-3">
			<a href="{{ route('comics.index') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Back</a>
		</div>
	</div>

	<form class="row row-cols-4 g-3 flex-column align-items-center" action="{{ route('comics.store') }}" method="post">
		@csrf

		<div class="col">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control">
		</div>
		<div class="col">
			<label for="description">Description</label>
			<input type="text" name="description" id="description" class="form-control">
		</div>
		<div class="col">
			<label for="thumb">Thumb url</label>
			<input type="url" name="thumb" id="thumb" class="form-control">
		</div>
		<div class="col">
			<label for="price">Price</label>
			<input type="number" step="0.01" name="price" id="price" class="form-control">
		</div>
		<div class="col">
			<label for="series">Series</label>
			<input type="text" name="series" id="series" class="form-control">
		</div>
		<div class="col">
			<label for="sale_date">Sale date</label>
			<input type="date" name="sale_date" id="sale_date" class="form-control">
		</div>
		<div class="col">
			<label for="type">Type</label>
			<input type="text" name="type" id="type" class="form-control">
		</div>
		<div class="col text-center">
			<button type="submit" class="btn btn-primary mb-3">Send</button>
		</div>
	</form>

</section>



		

@endsection