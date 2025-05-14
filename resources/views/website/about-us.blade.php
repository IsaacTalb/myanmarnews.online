@extends('website.layout.main')
@section('title', 'About Us')
@section('meta-description', 'About Us - Myanmar News is a news website that provides news and articles about Myanmar. We cover a wide range of topics, including politics, economy, culture, and more. We also provide in-depth analysis and commentary on current events in Myanmar.')
@section('content')

<div class="row" data-aos="fade-up">
    <div class="col-xl-8 stretch-card grid-margin">
        <div class="position-relative">
            <h1 class="mb-4 font-weight-600">About Us</h1>
            <p class="mb-4 fs-15">
                Myanmar News is a news website that provides news and articles about Myanmar. We cover a wide range of topics, including politics, economy, culture, and more. Our mission is to provide accurate and unbiased news to the public, and to help people understand the current events in Myanmar.
            </p>
            <p class="mb-4 fs-15">
                We are a team of experienced journalists and editors who are dedicated to providing high-quality news and articles. We have a network of correspondents and contributors from all over Myanmar, and we are committed to reporting the news in a fair and balanced manner.
            </p>
            <p class="mb-4 fs-15">
                Our website is updated regularly with the latest news and articles, and we also provide in-depth analysis and commentary on current events in Myanmar. We have a section for opinion pieces and editorials, and we also provide a platform for readers to share their thoughts and opinions on the news.
            </p>
            <p class="mb-4 fs-15">
                We are committed to upholding the highest standards of journalism, and we are dedicated to providing accurate and unbiased news to the public.
            </p>
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