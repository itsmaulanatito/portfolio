<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <!-- <a class="navbar-brand font-tertiary h3" href="index.html">
      <img src="images/logosip.png" alt="Myself" style="width: 20%; height: 20%">
    </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('about') }}">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{ url('partnership') }}">Activity</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="{{ url('education') }}">Educaton</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('college') }}">College</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>