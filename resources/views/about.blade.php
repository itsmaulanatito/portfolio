@extends('template')
@section('content')

<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white font-tertiary">About Me</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6">
</section>
<!-- /page title -->

<!-- about -->
<section class="section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>Hello, my name is Tito Maulana, you can call me Tito. Basically Im a software engineer in a company based in Jakarta Indonesia, but Im also a gamer. My hobbies are playing game (obviously), but I like editing video such as meme video taken from my recording playing games.</p>
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="{{asset('images/about/tito.jpg')}}" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- education -->
<section class="section position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Hobbies</h2>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">Since 2020</p>
            <h4>Analog Photography</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">Since senior high school</p>
            <h4>Playing Games</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">Since 2020</p>
            <h4>Editing Video</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">Since senior high school</p>
            <h4>Hiking</h4>
            <p class="mb-0 text-light"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bg image -->
  <img class="img-fluid edu-bg-image w-100" src="images/backgrounds/education-bg.png" alt="bg-image">
</section>
<!-- /education -->

@endsection