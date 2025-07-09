@php
use App\Models\Team;
$teams = Team::all();
@endphp

<!-- Team Start -->
<main>
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
        <h1 class="mb-5">Expert Instructors</h1>
      </div>
      <div class="row g-4">
        @foreach ($teams as $instructor)
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
            <div class="team-item bg-light">
              <div class="overflow-hidden">
                <img class="img-fluid" src="{{ asset($instructor->image) }}" alt="{{ $instructor->name }}">
              </div>
              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                  @if ($instructor->facebook)
                    <a class="btn btn-sm-square btn-primary mx-1" href="{{ $instructor->facebook }}"><i class="fab fa-facebook-f"></i></a>
                  @endif
                  @if ($instructor->twitter)
                    <a class="btn btn-sm-square btn-primary mx-1" href="{{ $instructor->twitter }}"><i class="fab fa-twitter"></i></a>
                  @endif
                  @if ($instructor->instagram)
                    <a class="btn btn-sm-square btn-primary mx-1" href="{{ $instructor->instagram }}"><i class="fab fa-instagram"></i></a>
                  @endif
                </div>
              </div>
              <div class="text-center p-4">
                <h5 class="mb-0">{{ $instructor->name }}</h5>
                <small>{{ $instructor->designation }}</small>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</main>
<!-- Team End -->