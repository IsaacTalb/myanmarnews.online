@extends('website.layout.main')
@section('title', 'Myanmar News')
@section('content')

<div class="row" data-aos="fade-up">
    <div class="col-xl-8 stretch-card grid-margin">
        <div class="position-relative">
            <img src="assets/images/dashboard/myanmar-student.png" alt="banner" class="img-fluid" />
            <div class="banner-content">
                <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                   Myanmar News
                </div>
                <!-- <h1 class="mb-0">မြန်မာ့ သတင်းများ</h1> -->
                <div style="background: #fff; padding: 10px; border-radius: 5px;">
                    <h1 class="mb-2" style="color:black; line-height: 1.6">
                        What will the military government do for the upcoming exam?
                    </h1>
                </div>
                <div class="fs-12">
                    <span class="mr-2">Photo </span>Some students seen during the 2020 matriculation exam.
                </div>
            </div>
        </div>
    </div>
    {{-- Latest News --}}
    <div class="col-xl-4 stretch-card grid-margin">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h2>Latest news</h2>


                @foreach($articles->sortDesc()->take(3) as $latest)
                <a href="{{ route('article.show', $latest->id) }}" style="text-decoration: none; color:#fff">
                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                        <div class="pr-3 w-75">
                            {{-- <h5>{{ Str::words($latest->title, 5, '...')}}</h5> --}}
                            <h5 style="line-height: 1.6">{{ $latest->title}}</h5>
                            <div class="fs-12">
                                <span class="mr-2">Photo </span>{{  $latest->created_at->diffForHumans()    }}
                            </div>
                        </div>
                        <div class="rotate-img w-25">
                            <img src="{{asset(Helper::singeleImage($latest->image))}}" alt="thumb"
                                class="img-fluid img-lg" />
                        </div>
                    </div>
                </a>

                @endforeach


            </div>
        </div>
    </div>
</div>

{{-- Category list --}}
<div class="row" data-aos="fade-up">
    <div class="col-lg-3 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Category</h2>
                <ul class="vertical-menu">
                    @foreach($categories as $cat)

                    <li><a href="{{ route('article.index',$cat->id) }}">{{ $cat->name }}</a></li>
                    @endforeach

                    {{--   @foreach($articles as $art)
                            <li><a href="#">{{ $art->category->name }}</a></li>
                    @endforeach
                    --}}
                </ul>
            </div>
        </div>
    </div>
    {{-- Articles List --}}
    <div class="col-lg-9 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                @foreach($articles as $article)
                <a href="{{ route('article.show', $article->id) }}" style="text-decoration: none;color: #060606f0;">
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="position-relative">
                                <div class="rotate-img">
                                    <img src="{{asset(Helper::singeleImage($article->image)) }}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                                <div class="badge-positioned">
                                    <span class="badge badge-danger font-weight-bold">{{ $article->category->name }}
                                        news</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8  grid-margin">
                            <h2 class="mb-2 font-weight-600" style="line-height: 1.6">
                                {!! $article->title !!}
                            </h2>
                            <div class="fs-13 mb-2">
                                <span class="mr-2">Photo </span>{{ $article->created_at->diffForHumans() }}
                            </div>
                            <p class="mb-0 text-justify">
                                {!! strip_tags(Str::words($article->description, 25,'...')) !!}
                            </p>
                            <hr>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{--Category  --}}
<div class="row" data-aos="fade-up">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    @foreach($category->chunk(3) as $chunk)

                    @foreach($chunk as $category)
                    <div class="col-md-4 border-right">

                        <div class="card-title">
                            {{ $category->name }}

                        </div>
                        @foreach($category->articles()->latest()->take(3)->get() as $article)
                        <a href="{{ route('article.show', $article->id) }}"
                            style="text-decoration: none;color: #060606f0;">
                            <div class="row mb-md-3">
                                <div class="col-md-4">
                                    <img src="{{asset(Helper::singeleImage($article->image))}}" alt="thumb"
                                        class="img-fluid w-100">
                                </div>

                                <div class="col-md-8" style="min-height: 97px;">
                                    <h5 style= "margin: 0; line-height: 1.6;"> {{ $article->title }}</h5>
                                    <p style="margin: 0">{{ $article->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </a>



                        @endforeach

                    </div>

                    @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('extra-js')

<!-- inject:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="./assets/js/demo.js"></script>
<!--  <script src="./assets/js/jquery.easeScroll.js"></script> -->
<!-- End custom js for this page-->
@endsection