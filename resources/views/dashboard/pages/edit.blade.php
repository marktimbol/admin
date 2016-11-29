@extends('layouts.admin')

@section('content')
	<form method="POST" action="{{ route('dashboard.pages.update', $page->id) }}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="form-group">
			<label for="title" class="control-label">Title</label>
			<input type="text" name="title" id="title" class="form-control" value="{{ $page->title }}" />
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Description</label>
			<textarea name="description" id="description" class="form-control" value="{{ $page->description }}" />
		</div>		

		<div class="form-group">
			<button class="btn btn-primary">Update</button>
		</div>		
	</form>
@endsection