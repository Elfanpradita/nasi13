@php
use App\Models\Course;
$courses = Course::all();
@endphp

<main>
 <!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Popular Courses</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($courses as $key => $course)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $key + 1 }}s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset($course->image) }}" alt="{{ $course->title }}">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">${{ number_format($course->price, 2) }}</h3>
                            <div class="mb-3">
                                @for ($i = 0; $i < 5; $i++)
                                    <small class="fa fa-star{{ $i < floor($course->rating) ? ' text-primary' : '' }}"></small>
                                @endfor
                                <small>({{ $course->reviews }})</small>
                            </div>
                            <h5 class="mb-4">{{ $course->title }}</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-user-tie text-primary me-2"></i>{{ $course->instructor }}
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-clock text-primary me-2"></i>{{ $course->duration }}
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-user text-primary me-2"></i>{{ $course->students }} Students
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Courses End -->
</main>