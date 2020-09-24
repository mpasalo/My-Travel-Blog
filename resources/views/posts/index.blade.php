@extends('layouts.master')

@section('content')

    <index-post-component :posts="{{ $posts }}"></index-post-component>

@endsection