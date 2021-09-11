@extends('template')
@section('content')

<section class="hero-area bg-primary" id="parallax">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <h1 class="text-white font-tertiary">Hi! I’m <br>Tito Maulana<br>Software Engineer</h1>
      </div>
    </div>
  </div>
  <div class="layer-bg w-100">
    <img class="img-fluid w-100" src="images/illustrations/leaf-bg.png" alt="bg-shape">
  </div>
  <div class="layer" id="l2">
    <img src="images/illustrations/dots-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l3">
    <img src="images/illustrations/leaf-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l4">
    <img src="images/illustrations/dots-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l5">
    <img src="images/illustrations/leaf-yellow.png" alt="bg-shape">
  </div>
  <div class="layer" id="l6">
    <img src="images/illustrations/leaf-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l7">
    <img src="images/illustrations/dots-group-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l8">
    <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape">
  </div>
  <div class="layer" id="l9">
    <img src="images/illustrations/leaf-cyan-2.png" alt="bg-shape">
  </div>
  <!-- social icon -->
  <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
    <li class="mb-3"><a class="text-white" href="https://www.facebook.com/itsmaulanatito" target="_blank"><i class="ti-facebook"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://www.instagram.com/itsmaulanatito/" target="_blank"><i class="ti-instagram"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://dribbble.com/itsmaulanatito" target="_blank"><i class="ti-dribbble"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://twitter.com/itsmaulanatito" target="_blank"><i class="ti-twitter"></i></a></li>
  </ul>
  <!-- /social icon -->
</section>
<!-- /hero area -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <p class="font-secondary paragraph-lg text-dark">Hello, my name is Tito Maulana, you can call me Tito. Basically Im a software engineer in a company based in Jakarta Indonesia, but Im also a gamer. My hobbies are playing game (obviously), but I like editing video such as meme video taken from my recording playing games.</p>
        <!-- <a href="about.html" class="btn btn-transparent">know more</a> -->
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- skills -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Skills</h2>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
            <div class="wave" data-progress="80%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Web Design (80%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
            <div class="wave" data-progress="70%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Video Editing (70%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
            <div class="wave" data-progress="90%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Graphic Design (90%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa">
            <div class="wave" data-progress="80%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">UI/UX Design (80%)</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- education -->
<section class="section position-relative">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Experience</h2>
      </div>
      <div class="col-lg-3 col-md-4 text-center">
        <img src="images/experience/icon-1.png" alt="icon">
        <p class="mb-0">Apr 2018 - Present</p>
        <h4>Software Engineer</h4>
        <h6 class="text-light">PT Sinergy Informasi Pratama</h6>
      </div>
      <div class="col-lg-3 col-md-4 text-center">
        <img src="images/experience/icon-2.png" alt="icon">
        <p class="mb-0">Mar 2020 - Present</p>
        <h4>Video Editor Freelance</h4>
        <h6 class="text-light">Freelance</h6>
      </div>
      <div class="col-lg-3 col-md-4 text-center">
        <img src="images/experience/icon-3.png" alt="icon">
        <p class="mb-0">Dec 2020 - Present</p>
        <h4>UI Designer Freelance</h4>
        <h6 class="text-light">Freelance</h6>
      </div>
    </div>
  </div>
  <!-- bg image -->
  <img class="img-fluid edu-bg-image w-100" src="images/backgrounds/education-bg.png" alt="bg-image">
</section>
<!-- /education -->

<!-- /services -->

<!-- testimonial -->

<!-- /testimonial -->

<!-- client logo slider -->
<!-- /client logo slider -->

@endsection