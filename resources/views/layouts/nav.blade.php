<header class="blog-header py-3" style="overflow: hidden; position: fixed; top: 0; left: 0; width: 100%; background-color: white; z-index: 4; padding: 10px;">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/posts">Travel Blog</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-secondary" href="/logout">Sign Out</a>
        </div>
    </div>
    <div style="font-family: Homemade Apple; font-size: 14px;">
        <nav class="nav">    
            @if (Auth::check())
                <p class="" href="#"> Signed In User: {{ Auth::user()->name }}</p>
            @endif
        </nav>
    </div>
</header>