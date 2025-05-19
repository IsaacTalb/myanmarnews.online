<div>
  <footer>
    <div class="footer-top" style="background-color: rgb(6 7 18 / 98%);">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <img src="assets/images/myanmarnews-blue.png" class="footer-logo" alt="" style="width: 30px; height: auto;">
            <h5 class="font-weight-normal mt-4 mb-5" style="line-height: 1.7;">
           Myanmar News delivers tech updates, tutorials, and online resources—all in one place. Stay informed with the latest news, science, and digital knowledge. 
            <br><br>
            Happy reading!
            </h5>
            <ul class="social-media mb-3">
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
            <!-- New About Us and Contact Us buttons -->
            <div class="footer-buttons mt-3 mb-4 d-flex flex-wrap">
  <a href="/about-us" class="btn" 
     style="background-color: #1e88e5; color: #fff; padding: 10px 18px; border-radius: 4px; font-size: 14px; font-weight: 600; margin-right: 12px; transition: background-color 0.3s;">
    About Us
  </a>
  <a href="/contact" class="btn" 
     style="background-color: transparent; color: #e0e0e0; border: 1px solid #e0e0e0; padding: 10px 18px; border-radius: 4px; font-size: 14px; font-weight: 600; transition: background-color 0.3s, color 0.3s;">
    Contact Us
  </a>
</div>

          </div>
          <div class="col-sm-4">
            <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
            <div class="row">
              <div class="col-sm-12">
                <div class="footer-border-bottom pb-2">
                  @foreach($categories->take(3) as $category)
                  @foreach($category->articles->sortDesc()->take(1) as $article)
                  <a href="{{ route('article.show',$article->id) }}" style="text-decoration: none;color: #fff;">
                    <div class="row mb-md-3">
                      <div class="col-3">
                        <img src="{{asset(Helper::singeleImage($article->image))}}" alt="thumb" class="img-fluid">
                      </div>
                      <div class="col-9">
                        <h5 style="line-height: 1.6;">{{ Str::words($article->title, 5, '...')}}</h5>
                      </div>
                    </div>
                  </a>

                  @endforeach
                  @endforeach
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-3">
            <h3 class="font-weight-bold mb-3">CATEGORIES</h3>

            @foreach($categories as $category)
            <a href="{{ route('article.index',$category->id) }}" style="text-decoration: none;color: #fff;">
              <div class="footer-border-bottom pb-2">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="mb-0 font-weight-600">{{ $category->name }}</h5>
                  <div class="count">{{ $category->articles->count() }}</div>
                </div>
              </div>
            </a>
            @endforeach

          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" style="background-color: rgb(6 7 18 / 98%);">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="d-sm-flex justify-content-between align-items-center">
              <div class="fs-14 font-weight-600">
               @ <a href="https://www.myanmarnews.online/" target="_blank" class="text-white"> Myanmar News</a>.
                All rights reserved.
              </div>
              <div class="fs-14 font-weight-600">
                Developed by <a href="https://www.myanmarnews.online/" target="_blank"
                  class="text-white">Myanmar News Team</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>