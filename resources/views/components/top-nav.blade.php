<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <header id="header" style="background-color: rgb(6 7 18 / 98%);">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-top">
              
            </div>
            <div class="navbar-bottom">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <a class="navbar-brand" href="/"
                    ><img src=" {{ asset('assets/images/myanmarnews-blue.png') }}" alt="Quick Tech Logo" style="width:45px;"
                  /></a>
                </div>
                <div>
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div
                    class="navbar-collapse justify-content-center collapse"
                    id="navbarSupportedContent"
                  >
                    <ul
                      class="navbar-nav d-lg-flex justify-content-between align-items-center"
                    >
    
                    <button class="navbar-close">
                      <i class="mdi mdi-close"></i>
                    </button>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                
                  @foreach($categories->take(7) as $category)
                    <li class="nav-item"><a class="nav-link" href="{{ route('article.index',$category->id) }}"> {{ $category->name }}</a></li>
                  @endforeach
    
                   <li class="nav-item active">
                    <a class="nav-link" href="/about-us">About Us</a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="/privacy-policy">Privacy Policies</a>
                  </li>
                   
                    
                    </ul>
                  </div>
                </div>
                <ul class="social-media">
                  <li>
                    <a href="https://www.facebook.com/MyanmarNewsOnlineWeb">
                      <i class="mdi mdi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/@MyanmarNewsOnline">
                      <i class="mdi mdi-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://x.com/MyanmarNewsWeb">
                      <i class="mdi mdi-twitter"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
</div>