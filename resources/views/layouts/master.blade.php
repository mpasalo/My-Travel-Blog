@include('header.header')

<body>
    <div class="background-image"></div>
    <div class="content">
        <div class="container">
            @include('layouts.nav')
        </div>
        <main role="main" class="container" style="background-color: white;">
            <div id="app">
                <div class="row">
                    @yield ('content')
                    @include ('layouts.sidebar')
                </div>     
            </div>
        </main>
    </div>
</body>

@include('footer.footer')