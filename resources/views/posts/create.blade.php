@extends('layouts.master')


@section('content')
	<div class="col-md-8 blog-main">
		<h1 class="title">Create A New Post</h1>



		<form method="POST" action="/posts">

			{{ csrf_field() }}
			
			<div class="form-group">
				
				<label class="label" for="title">Post Title</label>

				<input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }} form-control" name="title" value="{{ old('title') }}">

			</div>

			<div class="form-group">
				
				<label class="label" for="body">Blog Content</label>

				<textarea name="body" class="textarea {{ $errors->has('body') ? 'is-danger' : '' }} form-control">{{ old('body') }}</textarea>
			</div>

			<div class="form-group">
				<div class="control">

					<button type="submit" class="btn btn-danger">Publish Post</button>

				</div>	
			</div>

			@include ('layouts.errors')
		</form>
	</div>
@endsection