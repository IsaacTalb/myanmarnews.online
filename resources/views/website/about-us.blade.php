@extends('website.layout.main')
@section('title', 'About Us')
@section('meta-description', 'About Us - Learn more about Myanmar News, our mission, our values, and the team behind our trusted journalism.')

@section('content')
<style>
    .team-card {
        background-color: #1f2937;
        color: #f9fafb;
        border-radius: 0.75rem;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-5px);
    }

    .team-card h5 {
        font-size: 1.2rem;
        color: #93c5fd;
    }

    .team-card p {
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
    }
</style>

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
                <h4 class="mb-4 font-weight-semibold text-center">Meet Our Team</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="team-card text-center">
                            <h5>Leon (pseudonym)</h5>
                            <p class="text-muted small">Junior Editor</p>
                            <p>A journalist with 3 years of experience in political and social affairs reporting.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-card text-center">
                            <h5>Phyo Aung Kyaw</h5>
                            <p class="text-muted small">Senior Reporter</p>
                            <p>Focuses on education, and rural development topics throughout Myanmar.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-card text-center">
                            <h5>Thiri Htet</h5>
                            <p class="text-muted small">Digital Editor</p>
                            <p>Leads our digital strategy and ensures news is accessible and optimized for online readers.</p>
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
        <p class="mb-3">Feel free to reach out to us at <a href="mailto:contact@myanmarnews.online">contact@myanmarnews.online</a></p>
        <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
    </div>
</div>

@endsection

@section('extra-js')
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
<script src="./assets/js/demo.js"></script>
@endsection
