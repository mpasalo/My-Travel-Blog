@extends('layouts.master')

@section('content')
    
    <show-post-component :post="{{ $post }}"></show-post-component>

@endsection