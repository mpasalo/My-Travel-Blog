<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="/css/blog.css">

        <!-- Styles -->
       
    </head>



<body background="/topical.png" style="height: 100%; background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">

        <div id="video-container">

            @yield('content')

        </div>

</body>

</html>
