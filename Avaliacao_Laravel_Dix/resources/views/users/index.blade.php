<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('White Dashboard Laravel by Creative Tim & UPDIVISION') }}</title>
        <!-- Favicon -->

       <!-- Extra details for Live View on GitHub Pages -->
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://www.creative-tim.com/product/white-dashboard-laravel" />


        <!--  Social tags      -->
        <meta name="keywords" content="design system, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, white, white dashboard, creative tim, updivision, html dashboard, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap dashboard, responsive dashboard, laravel, laravel php, laravel php framework, free laravel admin template, free laravel admin, free laravel admin template + Front End + CRUD, crud laravel php, crud laravel, laravel backend admin dashboard">
        <meta name="description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up">


        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="White Dashboard Laravel by Creative Tim & UPDIVISION">
        <meta itemprop="description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up">

        <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/215/opt_wd_laravel_thumbnail.jpg">


        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@creativetim">
        <meta name="twitter:title" content="White Dashboard by Creative Tim & UPDIVISION">

        <meta name="twitter:description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up">
        <meta name="twitter:creator" content="@creativetim">
        <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/215/opt_wd_laravel_thumbnail.jpg">


        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="White Dashboard by Creative Tim & UPDIVISION" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://www.creative-tim.com/live/white-dashboard-laravel" />
        <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/215/opt_wd_laravel_thumbnail.jpg"/>
        <meta property="og:description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up" />
        <meta property="og:site_name" content="Creative Tim" />

        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('white') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('white') }}/img/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('white') }}/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS -->
        <link href="{{ asset('white') }}/css/white-dashboard.css?v=1.0.0" rel="stylesheet" />
        <link href="{{ asset('white') }}/css/theme.css" rel="stylesheet" />

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
        <!-- End Google Tag Manager -->
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
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');
            try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");
            } catch (err) {
            console.log('Facebook Track Error:', err);
            }
        </script>
    </head>
<body class="white-content clickup-chrome-ext_installed">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>
                <div class="wrapper">
                    <div class="sidebar">
                        <div class="sidebar-wrapper">
                            <div class="logo">
                                <a href="#" class="simple-text logo-mini">{{ __('WD') }}</a>
                                <a href="#" class="simple-text logo-normal">{{ __('White Dashboard') }}</a>
                            </div>
                            <ul class="nav">
                                <li>
                                    <a href="{{ route('home') }}">
                                        <i class="tim-icons icon-chart-pie-36"></i>
                                        <p>{{ __('Dashboard') }}</p>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                                        <i class="fas fa-cogs" ></i>
                                        <span class="nav-link-text" >{{ __('Gerenciar Usuario') }}</span>
                                        <b class="caret mt-1"></b>
                                    </a>
                    
                                    <div class="collapse show" id="laravel-examples">
                                        <ul class="nav pl-4">
                                            <li >
                                                <a href="{{ route('profile.edit')  }}">
                                                    <i class="tim-icons icon-single-02"></i>
                                                    <p>{{ __('Meu Perfil') }}</p>
                                                </a>
                                            </li>
                                            @if('manage-users')
                                                <li class="active" >
                                                    <a href="{{ route('user.index')  }}">
                                                        <i class="tim-icons icon-bullet-list-67"></i>
                                                        <p>{{ __('Gerenciar Perfis') }}</p>
                                                    </a>
                                                </li>
                                                
                                            @endcan
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ route('news.index') }}">
                                        <i class="fa fa-newspaper"></i>
                                        <p>{{ __('Noticias') }}</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
            <div class="main-panel">
                <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle d-inline">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="#">{{ $page ?? __('Dashboard') }}</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav ml-auto">
                                <li class="dropdown nav-item">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/anime3.png" alt="{{ __('Profile Photo') }}">
                                        </div>
                                        <b class="caret d-none d-lg-block d-xl-block"></b>
                                        <p class="d-lg-none">{{ __('Log out') }}</p>
                                    </a>
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li class="nav-link">
                                            <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Meu Perfil') }}</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="{{ route('news.index') }}" class="nav-item dropdown-item">{{ __('Minhas Noticias') }}</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#" class="nav-item dropdown-item">{{ __('Configurações') }}</a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="nav-link">
                                            <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="separator d-lg-none"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="{{ __('SEARCH') }}">
                                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                                    <i class="tim-icons icon-simple-remove"></i>
                              </button>
                            </div>
                        </div>
                    </div>
                </div>
          
                
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
          </button>
        </div>
    </div>
</div>
</div>


<div class="content">
    <div class="row">
    <div class="col-md-12">
        <div class="card ">

            <div class="card-header">

                @if (Session::has('status_success'))
                    <div class="alert alert-success" role="alert">
                        <p>{{ Session::get('status_success') }}</p>
                    </div>
                @endif

                @if (Session::has('status_danger'))
                    <div class="alert alert-danger" role="alert">
                        <p>{{ Session::get('status_danger') }}</p>
                    </div>
                @endif

                @if (Session::has('status_warning'))
                    <div class="alert alert-warning" role="alert">
                        <p>{{ Session::get('status_warning') }}</p>
                    </div>
                @endif

                
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <p>{{ $error }}</p>
                    </div>
                    @endforeach
                @endif

                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">Usuarios</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Adicionar Usuario</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                
                <div class="">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr><th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de Criação</th>
                            <th scope="col"></th>
                        </tr></thead>
                        <tbody>
                            @foreach ($users as $user)
                                
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                </td>
                                <td>{{ $user->created_at }}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ route('user.edit', $user->id) }} ">Editar</a>
                                            <a class="dropdown-item"  href="{{ route('user.delete', $user->id) }}">Apagar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                            @endforeach
                                                        </tbody>
                    </table>
                </div>
                
            </div>
            
            <div class="card-footer py-4">
                
                <nav class="d-flex justify-content-end" aria-label="...">
                    
                </nav>
            </div>
        </div>


<!-- Modal Add User -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
                Adicionar Novo Usuário                
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
      <div class="modal-body">
        
      <div class="card">
  <div class="card-body">
    
  <form class="form" method="post" action="{{ route('user.register') }}">
    @csrf
      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Full name">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      </div>

      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>

      <div class="form-group">
        <label>Nova Senha</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="">
    </div>
      

    </div>
</div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
    <button type="submit" class="btn btn-primary">Adicionar Usuario</button>
</div>
</form>
    </div>
  </div>
</div>
        
    </div>
</div>
                </div>

                <footer class="footer">
</footer>
            </div>
        </div>
    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
            @csrf
            <div class="fixed-plugin">
    </div>
    <script src="{{ asset('white') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('white') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('white') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('white') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    <!-- Chart JS -->
    {{-- <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script> --}}
    <!--  Notifications Plugin    -->
    <script src="{{ asset('white') }}/js/plugins/bootstrap-notify.js"></script>

    <script src="{{ asset('white') }}/js/white-dashboard.js?v=1.0.0"></script>
    <script src="{{ asset('white') }}/js/theme.js"></script>

@stack('js')

    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                    } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        whiteDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        whiteDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);

                        if (white_color == true) {
                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').removeClass('white-content');
                            }, 900);
                            white_color = false;
                        } else {
                            $('body').addClass('change-background');
                            setTimeout(function() {
                                $('body').removeClass('change-background');
                                $('body').addClass('white-content');
                            }, 900);

                            white_color = true;
                        }
                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    @stack('js')
</body>
</html>
