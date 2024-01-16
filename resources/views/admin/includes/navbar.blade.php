<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Testimonials
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
            <li><a href="{{ route('testimonialTable') }}">Testimonials</a></li>
            <li><a href="{{ route('addTestimonial') }}">Add Testimonial</a></li>
            <li><a href="{{ route('trashedTestimonial') }}">Trashed Testimonials</a></li>
          </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Appointments
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('appointment') }}">Appointments</a></li>
              <li><a href="{{ route('appointmentTable') }}">Appointments Table</a></li>
              <li><a href="{{ route('addAppointment') }}">Add Appointment</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('contact') }}">Contacts</a></li>
              <li><a href="{{ route('contactTable') }}">Contacts Table</a></li>
              <li><a href="{{ route('addContact') }}">Add Contacts</a></li>
            </ul>
          </li>

        {{-- <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li> --}}
      </ul>
    </div>
  </nav>
