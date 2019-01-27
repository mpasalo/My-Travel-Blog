
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Blog Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>

    body  {

        font-family: 'Architects Daughter'; 

    }

   p {

      font-family: 'Architects Daughter'; 

    }

      a {

      text-decoration: none !important;
      
      font-family: 'Nothing You Could Do' !important;

    }
    
    .background-image {
      background-image: url('/iceland.jpg');
      background-size: cover;
      display: block;
      filter: blur(6px);
      -webkit-filter: blur(6px);
      height: 100%;
      left: 0;
      position: fixed;
      right: 0;
      z-index: -1;

    }
      .content {

       
        top: 10px;
        left: 0;
        margin-left: 20px;
        margin-right: 20px;
        right: 0;
        z-index: 2;
        margin-top: 120px;
    

      
    }

    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
     <link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>
     <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
     <link href='https://fonts.googleapis.com/css?family=Nothing You Could Do' rel='stylesheet'>
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>
  <body">
    
    <div class="background-image"></div>

    <div class="content">
    
      <div class="container">
         @include('layouts.nav')
      </div>

      <main role="main" class="container" style="background-color: white;">
        <div class="row">
         

            @yield ('content')

            @include ('layouts.sidebar')

        </div><!-- /.row -->

      </main><!-- /.container -->

   
  @include('layouts.footer')
       </div>
</body>
</html>
