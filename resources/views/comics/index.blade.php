@extends('layouts.app')

@section('title', 'Comics')

@section('content')
	<section id="comics" class="container-fluid px-5 my-4">
		<div class="row">
			<div class="col-12 mb-4">
				<a href="{{ route('comics.create')}}" class="btn btn-brand" tabindex="-1" role="button" aria-disabled="true">Add New Comic</a>
			</div>
			@foreach ($comics as $comic)
				<div class="col-2">
					<a href="{{ route('comics.show', $comic->id ) }}">
						<div class="card mb-4 p-2">
							<img src="{{ $comic->thumb }}" class="card-img-top" alt="Poster of{{ $comic->title }}">
							<div class="card-body">
								<h5 class="card-title">{{ $comic->title }}</h5>
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