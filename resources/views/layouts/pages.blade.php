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


        <!-- Page Header End -->
        @include('includes.pageHeaderEnd')
        <!-- Page Header End -->

@yield('content')


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

