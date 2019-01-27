 <header class="blog-header py-3" style="overflow: hidden; position: fixed;
  top: 0; left: 0;
  width: 100%; background-color: white; z-index: 4; padding: 10px;">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <!-- <a class="text-muted" href="#">Subscribe</a> -->
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">My Travel Blog</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
     <!--    <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3" focusable="false" role="img"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
        </a> -->
        <a class="btn btn-sm btn-outline-secondary" href="/logout">Sign Out</a>
      </div>
    </div>
 

  <div style="font-family: Homemade Apple; font-size: 14px;">
    <nav class="nav">

      <!-- <a class="p-2 text-muted" href="#">World</a>
      <a class="p-2 text-muted" href="#">U.S.</a>
      <a class="p-2 text-muted" href="#">Technology</a>
      <a class="p-2 text-muted" href="#">Design</a>
      <a class="p-2 text-muted" href="#">Culture</a>
      <a class="p-2 text-muted" href="#">Business</a>
      <a class="p-2 text-muted" href="#">Politics</a>
      <a class="p-2 text-muted" href="#">Opinion</a> -->

      @if (Auth::check())
  

        <p class="" href="#"> Signed In User: {{ Auth::user()->name }}</p>
      @endif
    </nav>
  </div>
 </header>