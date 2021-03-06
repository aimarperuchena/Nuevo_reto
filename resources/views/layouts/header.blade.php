
<section class="header">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a href="#top"><img src="assets\img\logo_alpha_white.png" width="50" height="50" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="contenido collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#">{{ __('multi.inicio') }}
                      <span class="sr-only">(current)</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#nosotros">{{ __('multi.nosotros') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#services">{{ __('multi.servicios') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#contact">{{ __('multi.contactanos') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#modalLoginForm">{{ __('multi.login') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#modalRegistrerForm">{{ __('multi.registro') }}</a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('locale/es') }}"><i class="fa fa-language"></i>ES</a>
              </li>

              <li>
                  <a href="{{ url('locale/en') }}"><i class="fa fa-language"></i>EN</a>
              </li>
              <li>
                  <a href="{{ url('locale/eus') }}"><i class="fa fa-language"></i>EUS</a>
              </li>

          </ul>
      </div>
  </nav>
</section>
