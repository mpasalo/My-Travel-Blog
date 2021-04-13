@extends('layouts.master')

@section('content')

    <index-post-component :posts="{{ $posts }}" :user="{{ Auth::user() }}"></index-post-component>

@endsection