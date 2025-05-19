<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="google-adsense-account" content="ca-pub-8649713048907576">
    <title> @yield('title')</title>
    @yield('extra-css')
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="/assets/images/myanmarnews/android-chrome-192x192.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- endinject -->

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8649713048907576"
     crossorigin="anonymous"></script>

    <script>
        // Detect right-click event
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault(); // Prevent default behavior
            alert("Right-clicking is disabled on this website.");
        });
        // Detect keyboard shortcut for inspecting elements (Ctrl+Shift+I or F12)
        document.onkeydown = function(e) {
            if (e.ctrlKey && (e.shiftKey && e.keyCode === 73)) { // Ctrl+Shift+I
            alert("Inspecting is disabled on this website.");
            return false;
            }
            if (e.keyCode === 123) { // F12
            alert("Inspecting is disabled on this website.");
            return false;
            }
        };

        // Prevent right-click context menu
        document.addEventListener('contextmenu', function(event) {
            // Check if the clicked element is not a button or a link
            if (!event.target.matches('button, a')) {
            event.preventDefault(); // Prevent default behavior
            }
        });
    </script>
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            {{--  @include('website.layout.top-nav') --}}
            <x-top-nav />

            @if(request()->is('/'))
            <x-website.flash-news />
            @endif

            <div class="content-wrapper">
                <div class="container">
                    @yield('content')
                </div>
            </div>


            <x-footer />
            {{--  @include('website.layout.footer') --}}
        </div>
    </div>
    @yield('extra-js')
</body>
</html>
