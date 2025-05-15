@extends('website.layout.main')
@section('title', 'About Us')
@section('meta-description', 'About Us - Learn more about Myanmar News, our mission, our values, and the team behind our trusted journalism.')

@section('content')

<div class="row" data-aos="fade-up">
    <div class="col-xl-10 stretch-card grid-margin mx-auto">
        <div class="position-relative">
            <h1 class="mb-4 font-weight-bold">About Us</h1>

            <p class="mb-4 fs-15">
                <strong>Myanmar News</strong> is an independent digital news platform committed to delivering accurate, timely, and unbiased news coverage across Myanmar. Our mission is to inform, engage, and empower our readers through professional journalism.
            </p>

            <h4 class="mb-3 font-weight-semibold">What We Cover</h4>
            <p class="mb-4 fs-15">
                We offer a wide range of news and features spanning politics, economy, social issues, culture, and more. From daily headlines to in-depth investigative reporting, our goal is to help you stay informed and make sense of what’s happening in the country.
            </p>

            <h4 class="mb-3 font-weight-semibold">Our Editorial Team</h4>
            <p class="mb-4 fs-15">
                Our newsroom consists of experienced journalists, editors, and contributors located throughout Myanmar. Each team member is dedicated to maintaining the integrity of our reporting and upholding the highest journalistic standards.
            </p>

            <!-- Team Members Section -->
            <div class="my-5">
                <h4 class="mb-4 font-weight-semibold">Meet Our Team</h4>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card text-center border-0 shadow-sm">
                            <img src="{{ asset('assets/images/team2.jpg') }}" class="card-img-top rounded-circle w-50 mx-auto mt-3" alt="Editor-in-Chief">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Leon</h5>
                                <p class="text-muted small mb-2">Junior Editor</p>
                                <p class="card-text">A journalist with  3 years of experience in political and social affairs reporting.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card text-center border-0 shadow-sm">
                            <img src="{{ asset('assets/images/team1.jpg') }}" class="card-img-top rounded-circle w-50 mx-auto mt-3" alt="Senior Reporter">
                            <div class="card-body">
                                <h5 class="card-title mb-1">James Arthur</h5>
                                <p class="text-muted small mb-2">Senior Reporter</p>
                                <p class="card-text">Focuses on education, and rural development topics throughout Myanmar.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card text-center border-0 shadow-sm">
                            <img src="{{ asset('assets/images/team3.jpg') }}" class="card-img-top rounded-circle w-50 mx-auto mt-3" alt="Senior Reporter">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Alexia</h5>
                                <p class="text-muted small mb-2">Digital Editor</p>
                                <p class="card-text">Leads our digital strategy and ensures news is accessible, and optimized for online readers.</p>
                            </div>
                        </div>
                    </div>



                    
                </div>
            </div>

            <h4 class="mb-3 font-weight-semibold">Our Commitment</h4>
            <p class="mb-4 fs-15">
                We strive to ensure transparency, accountability, and factual accuracy in everything we publish. We are not affiliated with any political party or interest group, and we aim to create a trustworthy space for news and public discourse.
            </p>

            <h4 class="mb-3 font-weight-semibold">Join the Conversation</h4>
            <p class="mb-4 fs-15">
                Our platform also includes opinion pieces and editorials, giving voice to diverse perspectives. Readers are welcome to engage, comment, and contribute to discussions that shape the future of Myanmar.
            </p>
        </div>
    </div>
</div>

<!-- Optional Contact Info -->
<div class="bg-light py-5 mt-5">
    <div class="container text-center">
        <h5 class="mb-3 font-weight-bold">Have Questions or Feedback?</h5>
        <p class="mb-3">Feel free to reach out to us at <a href="mailto:contact@myanmarnews.com">contact@myanmarnews.com</a></p>
        <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
    </div>
</div>

@endsection

@section('extra-js')
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
<script src="./assets/js/demo.js"></script>
@endsection
