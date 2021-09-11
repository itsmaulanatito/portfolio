@extends('template')
@section('content')

<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Education</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
</section>
<!-- /page title -->

<!-- education -->
<section class="section position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">2015 - 2018</p>
            <h4>Senior High School</h4>
            <p class="mb-0 text-light">SMK Telkom Malang</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">2018 - Present</p>
            <h4>Bachelor Degree</h4>
            <p class="mb-0 text-light">Bina Nusantara University</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bg image -->
  <img class="img-fluid edu-bg-image w-100" src="images/backgrounds/education-bg.png" alt="bg-image">
</section>
<!-- /education -->

<!-- testimonial -->
<section class="section bg-primary position-relative testimonial-bg-shapes">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title text-white mb-5">Organization</h2>
      </div>
      <div class="col-lg-10 mx-auto testimonial-slider">
        <!-- slider-item -->
        <div class="text-center testimonial-content">
          <h3 class="text-white">Student Council</h3>
          <!-- <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/tito.jpg"
            alt="client-image"> -->
          <h4 class="text-white">Tito Maulana</h4>
          <h6 class="text-light mb-4">As Sport Council</h6>
        </div>
        <!-- slider-item -->
        
        <!-- slider-item -->
        
      </div>
    </div>
  </div>
  <!-- bg shapes -->
  <img src="images/backgrounds/map.png" alt="map" class="img-fluid bg-map">
  <img src="images/illustrations/dots-group-v.png" alt="bg-shape" class="img-fluid bg-shape-1">
  <img src="images/illustrations/leaf-orange.png" alt="bg-shape" class="img-fluid bg-shape-2">
  <img src="images/illustrations/dots-group-sm.png" alt="bg-shape" class="img-fluid bg-shape-3">
  <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape" class="img-fluid bg-shape-4">
  <img src="images/illustrations/leaf-cyan.png" alt="bg-shape" class="img-fluid bg-shape-5">
</section>
<!-- /testimonial -->
@endsection