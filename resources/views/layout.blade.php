<!DOCTYPE html>
{{-- <html lang="en"> --}}

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .error{
            color: red;
            font-size: 12px;
        }
    </style>
    <title>Sistema de Nómina</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('plantilla/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/dataTable.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('plantilla/vendors/icheck/skins/all.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('plantilla/images/logoSena.png')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

</head>

<body onload="quitar()">

        @include('sweetalert::cdn')
        @include('sweetalert::view')
        {{-- @include('sweetalert::validator') --}}

    <div class="container-scroller">
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="">
                    <img src="{{asset('plantilla/images/logo.svg')}}" alt="logo" />
                    {{-- <span>Nómina</span> --}}
                </a>
                <a class="navbar-brand brand-logo-mini" href="">
                    <img src="{{asset('plantilla/images/logo-mini.svg')}}" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center" style="background:#304a65 ">
                <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                </ul>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-file-document-box"></i>
                            <span class="count">0</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <div class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">Tiene 7 correos no leídos
                                </p>
                                <span class="badge badge-info badge-pill float-right">Ver todo</span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('plantilla/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium text-dark">Sebastián C
                                        <span class="float-right font-weight-light small-text">Hace 1 minuto</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        El encuentro ha sido cancelado.
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('plantilla/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium text-dark">Ana Cano
                                        <span class="float-right font-weight-light small-text">Hace 15 minutos</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        ¡Nuevo producto!
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('plantilla/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Michael
                                        <span class="float-right font-weight-light small-text">Hace 18 minutos</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Próxima junta directiva
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <span class="count">0</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">Tiene 4 notificaciones nuevas
                                </p>
                                <span class="badge badge-pill badge-warning float-right">Ver todo</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-alert-circle-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium text-dark">Error de aplicación</h6>
                                    <p class="font-weight-light small-text">
                                        En este momento
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-comment-text-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium text-dark">Configuraciones</h6>
                                    <p class="font-weight-light small-text">
                                        Mensaje privado
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-email-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium text-dark">Nuevo usuario registrado</h6>
                                    <p class="font-weight-light small-text">
                                        Hace 2 días
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <span class="fa fa-user fa-lg"></span>
                        </a>
                        <div style="position: absolute;margin-top: 9px;right: -11px;left: inherit;" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a  class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Cerrar sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    {{-- <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="profile-text"> Sebastián Corrales</span>
                            <img class="img-xs rounded-circle" src="{{asset('plantilla/images/logoFavicon.png')}}" alt="Profile image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <a class="dropdown-item p-0">
                                <div class="d-flex border-bottom">
                                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                        <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                                    </div>
                                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                        <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                                    </div>
                                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                        <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                Cambiar contraseña
                            </a>
                            <a class="dropdown-item">
                                Cerrar sesión
                            </a>
                        </div>
                    </li> --}}
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background: #304a65">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="user-wrapper">
                                <div class="profile-image">
                                    <img src="{{asset('plantilla/images/logoFavicon.png')}}" alt="profile image">
                                </div>
                                <div class="text-wrapper">
                                    {{-- <p class="profile-name" style="color:white">Sebastián Corrales</p> --}}
                                    <a class="profile-name" style="color:white">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                    <div>
                                        <small class="designation text-muted">{{ Auth::user()->email }}</small>
                                        <span class="status-indicator online"></span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-block">Nuevo proyecto
                                <i class="mdi mdi-plus"></i>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="menu-icon mdi mdi-television"></i>
                            <span class="menu-title">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon fas fa-users"></i>
                            <span class="menu-title">Empleados</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('employees.create')}}">Registrar empleados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('employees.index')}}">Consultar empleados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('employees.vinculations')}}">Consultar afiliaciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('holidays.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Vacaciones</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-bas" id="empresas_menu" aria-expanded="false" aria-controls="ui-bas">
                                <i class="menu-icon far fa-building"></i>
                                <span class="menu-title">Empresas</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-bas">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('company.create')}}"><i class="fas fa-plus-circle"></i>&nbsp; Registrar empresa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('company.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Consultar empresas</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="{{route('areas.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Áreas</a>
                                        </li>
                                </ul>
                            </div>
                        </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="menu-icon far fa-money-bill-alt"></i>
                            <span class="menu-title">Salarios</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('payroll.index')}}">
                            <i class="menu-icon fas fa-dollar-sign"></i>
                            <span class="menu-title">Nómina</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basi" id="todo" aria-expanded="false" aria-controls="ui-basi">
                            <i class="menu-icon fas fa-cog"></i>
                            <span class="menu-title">Configuraciones</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basi">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('bonus.create')}}"><i class="fas fa-plus-circle"></i>&nbsp; Bonus</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('commissions.create')}}"><i class="fas fa-plus-circle"></i>&nbsp; Comisiones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('documentType.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Tipos de documento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('EPS.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; EPS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('maritalStatus.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Estado civil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('overtimes.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Horas extras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('pensions.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Pensiones </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('professions.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Profesiones </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('layoffs.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Cesantías</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('rateJobs.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Cargos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('resolutions.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Resoluciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('typeContract.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Tipo de contrato</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('compensationFound.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Compensaciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('deductions.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Deducciones</a>
                                </li>
                                <li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('nucleusfamily.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; Parentezco</a>
                                </li>
                                <li class="nav-item">                                    
                                    <a class="nav-link" href="{{route('arl.index')}}"><i class="fas fa-plus-circle"></i>&nbsp; ARL</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">
                        {{-- <ul class="nav nav-tabs">
                                <li class="nav-item">
                                  <button class="nav-link active btn-primary" href="#">Bonus</button>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                                </li>
                                 <li class="nav-item">
                                  <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                              </ul><br> --}}
                    <div class="row">
                        @yield('contenido')
                         <footer class="footer col-md-12" style="">
                                <div class="container-fluid clearfix">
                                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                                        <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. Todos los
                                        derechos reservados.</span>
                                </div>
                        </footer>
                    </div>

                </div>


                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    {{-- <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script> --}}
    <script src="{{asset('plantilla/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('plantilla/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('plantilla/js/off-canvas.js')}}"></script>
    <script src="{{asset('plantilla/js/misc.js')}}"></script>

    {{-- <script src="{{asset('public/js/jquery.dataTables.min.js')}}"></script> --}}

    <script src="{{asset('/js/dataTable.min.js')}}">
    <script src="{{asset('/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/js/validations.js')}}"></script>
    <script src="{{asset('/js/formatDecimal.js')}}"></script>

    <script>
        $(document).ready( function () {
            $('#tableBonus').DataTable({
                responsive:true
            });
            // $('#levelEducative').select2();
        });
    </script>

    <script>
        function quitar()
        {
            $("#ui-basi").removeClass("show");
            $("#ui-bas").removeClass("show");
            $("#todo").addClass("collapsed");
            $("#empresas_menu").addClass("collapsed");
        }

    </script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>
