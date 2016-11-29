@extends('layouts.admin')

@section('content')
	<h1>Pages</h1>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>&nbsp;</th>
				<th>Title</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $pages as $page )
				<tr>
					<td>{{ $page->title }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection