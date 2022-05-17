@extends('layouts.app')

@section('title', 'Comics')

@section('content')
	<section id="comics" class="container-fluid px-5">
		<div class="row">
			<div class="col-12 m-3">
				<a href="{{ route('comics.create')}}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Add New Comic</a>
			</div>
			@foreach ($comics as $comic)
				<div class="col-3">
					<a href="{{ route('comics.show', $comic->id ) }}">
						<div class="card m-3">
							<img src="{{ $comic->thumb }}" class="card-img-top" alt="Poster of{{ $comic->title }}">
							<div class="card-body">
								<h5 class="card-title">{{ $comic->title }}</h5>
								<p class="card-text">{{ substr($comic->description, 0, 100) }}</p>
							</div>
						</div>
					</a>
				</div>
			@endforeach
			<div id="pagination" class="col-12">
				{{ $comics->links() }}
			</div>
		</div>
	</section>
@endsection