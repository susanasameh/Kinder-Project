<!DOCTYPE html>
<html lang="en">

<head>
   @include('includes.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
       @include('includes.spinner')
        <!-- Spinner End -->


        <!-- Navbar Start -->
        @include('includes.navbar')
        <!-- Navbar End -->


        <!-- Carousel Start -->
        @include('includes.carousel')
        <!-- Carousel End -->


        <!-- Facilities Start -->
        @include('includes.facilities')
        <!-- Facilities End -->


        <!-- About Start -->
        @include('includes.about')
        <!-- About End -->


        <!-- Call To Action Start -->
       @include('includes.callToAction')
        <!-- Call To Action End -->


        <!-- Classes Start -->
        @include('includes.classes')
        <!-- Classes End -->


        <!-- Appointment Start -->
       @include('includes.appointment')
        <!-- Appointment End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Popular Teachers</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                        eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
        @include('includes.team')
        </div>
    </div>
</div>
        <!-- Team End -->


        <!-- Testimonial Start -->
       @include('includes.testimonial')
        <!-- Testimonial End -->


        <!-- Footer Start -->
        @include('includes.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
       @include('includes.backToTop')

    <!-- JavaScript Libraries -->
    @include('includes.javascriptLibraries')
    <!-- Template Javascript -->
   @include('includes.templateJavascript')

</body>

</html>
