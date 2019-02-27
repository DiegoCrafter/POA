<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
                <!-- Favicon -->
                <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
                <!-- Fonts -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
                <!-- Icons -->
                <link href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet" type="text/css">
                <link href="{{ asset('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
                <!-- Argon CSS -->
                <link href="{{ asset('assets/css/argon.mine209.css?v=1.0.0') }}" rel="stylesheet" type="text/css">
              </head>

              <body>
                    <!-- Google Tag Manager (noscript) -->
                    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                    <!-- End Google Tag Manager (noscript) -->
                    <!-- Sidenav -->
                    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
                      <div class="scrollbar-inner">
                        <!-- Brand -->
                        <div class="sidenav-header d-flex align-items-center">
                          <a class="navbar-brand">
                            <span><img src="https://www.upeu.edu.pe/wp-content/uploads/2019/01/100-A%C3%B1os-de-Vita-estudiantil.png" class="navbar-brand-img" alt="..."/></span>
                            AppPOA
                          </a>
                          <div class="ml-auto">
                            <!-- Sidenav toggler -->
                            <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                              <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="navbar-inner">
                          <!-- Collapse -->
                          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                            <!-- Nav items -->
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link active" href="{{url('/home')}}">
                                  <i class="ni ni-shop text-primary"></i>
                                  <span class="nav-link-text">Menu</span>
                                </a>
                              </li>
                              @if(Auth::user()->hasRole('admin'))
                              <li class="nav-item">
                                <a class="nav-link" href="{{url('user')}}">
                                  <i class="ni ni-archive-2 text-green"></i>
                                  <span class="nav-link-text">Usuarios</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{url('reports')}}">
                                    <i class="ni ni-chart-pie-35 text-info"></i>
                                    <span class="nav-link-text">Reportes</span>
                                  </a>
                                </li>
                               @endif
                            </ul>
                          </div>
                        </div>
                      </div>
                    </nav>
                    <!-- Main content -->
                    <div class="main-content" id="panel">
                      <!-- Topnav -->
                      <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
                        <div class="container-fluid">
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Search form -->
                            <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                              <div class="form-group mb-0">
                                <div class="input-group input-group-alternative input-group-merge">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                  </div>
                                  <input class="form-control" placeholder="Buscar... " type="text">
                                </div>
                              </div>
                              <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </form>
                            <!-- Navbar links -->
                            <ul class="navbar-nav align-items-center ml-md-auto">
                              <li class="nav-item d-xl-none">
                                <!-- Sidenav toggler -->
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                  <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                  </div>
                                </div>
                              </li>
                              <li class="nav-item d-sm-none">
                                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                  <i class="ni ni-zoom-split-in"></i>
                                </a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ni ni-bell-55"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                                  <!-- Dropdown header -->
                                  <div class="px-3 py-3">
                                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                                  </div>
                                  <!-- List group -->
                                  <div class="list-group list-group-flush">
                                    <a href="#!" class="list-group-item list-group-item-action">
                                      <div class="row align-items-center">
                                        <div class="col-auto">
                                          <!-- Avatar -->
                                          <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                          <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                              <h4 class="mb-0 text-sm">John Snow</h4>
                                            </div>
                                            <div class="text-right text-muted">
                                              <small>2 hrs ago</small>
                                            </div>
                                          </div>
                                          <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                      <div class="row align-items-center">
                                        <div class="col-auto">
                                          <!-- Avatar -->
                                          <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                          <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                              <h4 class="mb-0 text-sm">John Snow</h4>
                                            </div>
                                            <div class="text-right text-muted">
                                              <small>3 hrs ago</small>
                                            </div>
                                          </div>
                                          <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                      <div class="row align-items-center">
                                        <div class="col-auto">
                                          <!-- Avatar -->
                                          <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                          <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                              <h4 class="mb-0 text-sm">John Snow</h4>
                                            </div>
                                            <div class="text-right text-muted">
                                              <small>5 hrs ago</small>
                                            </div>
                                          </div>
                                          <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                      <div class="row align-items-center">
                                        <div class="col-auto">
                                          <!-- Avatar -->
                                          <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                          <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                              <h4 class="mb-0 text-sm">John Snow</h4>
                                            </div>
                                            <div class="text-right text-muted">
                                              <small>2 hrs ago</small>
                                            </div>
                                          </div>
                                          <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                      <div class="row align-items-center">
                                        <div class="col-auto">
                                          <!-- Avatar -->
                                          <img alt="Image placeholder" src="../../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                          <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                              <h4 class="mb-0 text-sm">John Snow</h4>
                                            </div>
                                            <div class="text-right text-muted">
                                              <small>3 hrs ago</small>
                                            </div>
                                          </div>
                                          <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                  <!-- View all -->
                                  <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                                </div>
                              </li>
                           
                            </ul>
                            <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                              <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                      <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                      <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                    </div>
                                  </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Bienvenido!</h6>
                                  </div>
                                  <div class="dropdown-divider"></div>
                                  <a href="#!" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Cerrar Sesion</span>
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                  </form>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <!-- Header -->
                      <!-- Header -->
            
                      <!-- Page content -->
                      @yield('content')
                    </div>
                    <!-- Argon Scripts -->
                    <!-- Core -->
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/lavalamp/js/jquery.lavalamp.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/select2/dist/js/select2.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/nouislider/distribute/nouislider.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/quill/dist/quill.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/js/argon.mine209.js?v=1.0.0') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('assets/js/demo.min.js') }}"></script>
                    @include('sweet::alert')
                    
                    <script>
                      // Facebook Pixel Code Don't Delete
                      ! function(f, b, e, v, n, t, s) {
                        if (f.fbq) return;
                        n = f.fbq = function() {
                          n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                        };
                        if (!f._fbq) f._fbq = n;
                        n.push = n;
                        n.loaded = !0;
                        n.version = '2.0';
                        n.queue = [];
                        t = b.createElement(e);
                        t.async = !0;
                        t.src = v;
                        s = b.getElementsByTagName(e)[0];
                        s.parentNode.insertBefore(t, s)
                      }(window,
                        document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');
                  
                      try {
                        fbq('init', '111649226022273');
                        fbq('track', "PageView");
                  
                      } catch (err) {
                        console.log('Facebook Track Error:', err);
                      }
                    </script>
                    <noscript>
                      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
                    </noscript>
                  </body>


<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/alternative.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 22:14:04 GMT -->
</html>