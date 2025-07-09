@php
use App\Models\Title;
$titles = Title::first();
@endphp

<main>
<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>{{ $titles->title}}</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('courses') }}" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="{{ url("#") }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('team') }}" class="dropdown-item">Our Team</a>
                        <a href="{{ url('testimonial') }}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <div class="d-none d-lg-flex align-items-center gap-3">
                <a href="{{ url('edu/login') }}" class="btn btn-outline-primary py-3 px-4 rounded-pill shadow-sm d-flex align-items-center">
                    <i class="fa fa-sign-in-alt me-2"></i> Login
                </a>
                <a href="{{ url('register') }}" class="btn btn-primary py-3 px-4 rounded-pill shadow d-flex align-items-center">
                    <i class="fa fa-user-plus me-2"></i> Sign Up
                </a>
            </div>
        </div>
    </nav>
<!-- Navbar End -->
</main>