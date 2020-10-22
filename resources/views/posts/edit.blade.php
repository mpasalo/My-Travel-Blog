@extends('layouts.master')

@section('content')

	<edit-post-component :post="{{ $post }}"></edit-post-component>
	
@endsection