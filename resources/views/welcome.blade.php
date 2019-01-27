@extends('homelayouts.master')

@section('content')    

   <div class="video-content">
       <div class="inner">
         <h1 class="welcomeheader">My <em>Travel Blog</em></h1>
        
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <button class="btn btn-primary"><a href="{{ url('/posts') }}">Go to Blogs</a></button>
                         <button class="btn btn-danger"><a href="{{ url('/posts/create') }}">Create A New Post</a></button>

                    @else
                        <button class="btn btn-danger"><a href="{{ route('login') }}">Login</a></button>

                        @if (Route::has('register'))
                            <button class="btn btn-info"><a href="{{ route('register') }}">Register</a></button>
                        @endif
                    @endauth
                </div>
            @endif
       </div>
   </div>

   <video autoplay="" loop="" muted id="myVideo">

        <source src="highway-loop.mp4" type="video/mp4" />

   </video>

@endsection
