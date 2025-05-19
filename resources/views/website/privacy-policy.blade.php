@extends('website.layout.main')
@section('title', 'Privacy Policies for Myanmar News Online')
@section('meta-description', 'Privacy Policies for Myanmar News Online')

@section('content')
<div class="container">
    <h1 class="text-center text-primary mt-5 mb-3">Privacy Policies for Myanmar News Online</h1>
    <p class="text-muted">Last updated: December 17, 2022</p>

    <p class="lead">At Myanmar News Online, accessible from <a href="https://www.myanmarnewsonline.com" target="_blank">https://www.myanmarnewsonline.com</a>, your privacy is one of our top priorities. This Privacy Policy outlines the types of information we collect and record, how we use it, and how we ensure the protection of your data.</p>

    <p class="lead">By using our website, you consent to our Privacy Policy and agree to its terms.</p>

    <h2 class="mt-5">Editorial Integrity & Use of AI</h2>
    <p class="lead">Myanmar News Online references a variety of external sources, including reputable news outlets and publicly available information. While we aim to ensure factual accuracy, some sources may be uncertain at the time of publication. We consistently strive to fact-check and correct any inconsistencies when identified.</p>
    
    <p class="lead">We also leverage Artificial Intelligence (AI) technologies to assist with content creation, editorial workflow, and data analysis. This allows us to work more efficiently, produce timely content, and provide stronger insights to our global readership. All AI-assisted content is subject to human editorial review to maintain integrity and accuracy.</p>

    <h2 class="mt-5">Consent</h2>
    <p class="lead">By using our website, you hereby consent to our Privacy Policy and agree to its terms and any updates we may apply in the future.</p>

    <h2 class="mt-5">Information we collect</h2>
    <p class="lead">We may collect personal information such as your name, email address, contact details, and any content you choose to share with us. This information is collected when you contact us, subscribe to our services, or interact with features on the website.</p>

    <h2 class="mt-5">How we use your information</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">To operate and maintain our website</li>
        <li class="list-group-item">To improve and personalize your user experience</li>
        <li class="list-group-item">To understand how visitors use our site</li>
        <li class="list-group-item">To create and enhance features, products, and services</li>
        <li class="list-group-item">To communicate with you, including for customer support and updates</li>
        <li class="list-group-item">To send newsletters or promotional materials</li>
        <li class="list-group-item">To detect and prevent fraud and ensure security</li>
    </ul>

    <h2 class="mt-5">Log Files</h2>
    <p class="lead">We use standard log files to analyze trends, administer the site, and gather demographic information. This includes IP addresses, browser types, ISP details, timestamps, and referring/exit pages. This data is not linked to any personally identifiable information.</p>

    <h2 class="mt-5">Cookies and Web Beacons</h2>
    <p class="lead">We use cookies to store user preferences and optimize the experience based on browser type and other data. You may choose to disable cookies via your browser settings.</p>
    <p class="lead">Learn more about cookies here: <a href="https://www.cookieconsent.com/what-are-cookies/" target="_blank">What Are Cookies</a>.</p>

    <h2 class="mt-5">Third-Party Privacy Policies</h2>
    <p class="lead">Our Privacy Policy does not extend to third-party services or websites. Please refer to their respective policies for more information. You may choose to disable cookies or tracking features on your browser for additional privacy.</p>

    <h2 class="mt-5">CCPA Privacy Rights</h2>
    <p class="lead">California residents have rights under the California Consumer Privacy Act (CCPA), including the right to know, delete, or opt out of the sale of personal data. If you'd like to make such a request, please <a href="{{ route('contact') }}">contact us</a>.</p>

    <h2 class="mt-5">GDPR Data Protection Rights</h2>
    <p class="lead">If you are a resident of the European Economic Area (EEA), you are entitled to rights including:</p>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">The right to access and obtain a copy of your personal data</li>
        <li class="list-group-item">The right to request corrections to inaccurate data</li>
        <li class="list-group-item">The right to request erasure under certain conditions</li>
        <li class="list-group-item">The right to restrict or object to our processing of your data</li>
        <li class="list-group-item">The right to data portability</li>
    </ul>
    <p class="lead">If you wish to exercise any of these rights, please <a href="{{ route('contact') }}">contact us</a>. We will respond within one month.</p>
</div>
@endsection

