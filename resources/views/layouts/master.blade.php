<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Máster Dúal | UCO</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/home" class="brand-link">
            <img src="{{ asset('img/Logo_UCO.png') }}" alt="Logo UCO" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Máster Dual</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('img/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    @if(Auth::user() && Auth::user()->hasRole('admin'))
                    <li class="nav-item menu">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Bloque Formativo
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Valoración Asignaturas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li class="nav-item menu">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Bloque Prácticas
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Valoración Prácticas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Valoración Tutor Académico</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Valoración Tutor Laboral</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Bloque TFG
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Valoraciones TFG</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <!--<div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Starter Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Listado Asignaturas (Ambos)</h3>
                        </div>
                            <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Asignatura</th>
                                        <th>Progreso </th>
                                        <th style="width: 40px">%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($asignaturas as $asignatura)
                                    @php
                                        $num_asignaturas_encuestadas = rand(10, 100);
                                    @endphp
                                    <tr>
                                        <td>{{ $asignatura->id }}</td>
                                        <td>{{ $asignatura->name }}</td>
                                        @if($num_asignaturas_encuestadas <30)
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: {{ $num_asignaturas_encuestadas }}%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-danger">{{ $num_asignaturas_encuestadas }}%</span></td>
                                        @elseif($num_asignaturas_encuestadas < 70)
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-warning" style="width: {{ $num_asignaturas_encuestadas }}%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-warning">{{ $num_asignaturas_encuestadas }}%</span></td>
                                        @else
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-success" style="width: {{ $num_asignaturas_encuestadas }}%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">{{ $num_asignaturas_encuestadas }}%</span></td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Listado Estudiantes Asignaturas  (Director Máster)</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Estudiante</th>
                                        @foreach($asignaturas as $asignatura)
                                            <th>{{ $asignatura->name }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($estudiantes as $estudiante)
                                    <tr>
                                        <td><i class="fas fa-user"></i></td>
                                        <td>{{ $estudiante->nombre_estudiante }}</td>
                                        @foreach($asignaturas as $asignatura)
                                            @foreach($asignaturasUsuarios as $asignaturasUsuario)
                                                @if($asignatura->id == $asignaturasUsuario->asignatura and $estudiante->id_estudiante == $asignaturasUsuario->id_estudiante)
                                                    <td>{{ $asignaturasUsuario->estado }}</td>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                                <!-- /.card-body -->
                            </div>
                        </div><!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listado Asignaturas Estudiante (Estudiante)</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 170px;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">Asignatura</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($asignaturaUsuario as $usuarioAsignatura)
                                                <tr role="row" class="even">
                                                    <td>{{ $usuarioAsignatura->id_asignatura }}</td>
                                                    <td>{{ $usuarioAsignatura->nombre_asignatura }}</td>
                                                    <td>{{ $usuarioAsignatura->estado_asignatura }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                <div class="card">
                    <div class="card-header font-weight-bold bg-dark text-white">Asignatura : XXXXXXX</div>
                    <blockquote>
                        <p>A continuación se presentan una serie de cuestiones relativas a la docencia en esta asignatura. Su colaboración es necesaria y consiste en <b>señalar con una “X” dentro del recuadro correspondiente</b>, su grado de acuerdo con cada una de las afirmaciones, teniendo en cuenta que <b>“1”</b> significa <b>“TOTALMENTE EN DESACUERDO”</b> Y <b>“5” “TOTALMENTE DE ACUERDO”</b>. La encuesta es anónima y los datos serán tratados de forma totalmente confidencial. Si el enunciado no procede o no tiene suficiente información para contestar marque la opción <b>NS/NC</b>.</p>
                    </blockquote>
                    <div class="card-body">
                        <!--<form action="route('encuesta.update', ['encuestum' => $encuesta->id , 'block' => 1])" method="post">-->
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <p class="font-weight-bold">1. Los contenidos de la asignatura se adecúan al contexto del Máster</p>
                                <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_1" autocomplete="off" value="1">
                                <label class="btn btn-outline-primary" for="pregunta_1_1">1</label>

                                <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_2" autocomplete="off" value="2">
                                <label class="btn btn-outline-primary" for="pregunta_1_2">2</label>

                                <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_3" autocomplete="off" value="3">
                                <label class="btn btn-outline-primary" for="pregunta_1_3">3</label>

                                <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_4" autocomplete="off" value="4">
                                <label class="btn btn-outline-primary" for="pregunta_1_4">4</label>

                                <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_5" autocomplete="off" value="5">
                                <label class="btn btn-outline-primary" for="pregunta_1_5">5</label>

                                <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_6" autocomplete="off" value="NS/NC">
                                <label class="btn btn-outline-primary" for="pregunta_1_6">NS/NC</label>
                            </div>
                            <div class="form-group">
                                <p class="font-weight-bold">2. El profesorado organiza bien las actividades que se realizan en clase, explica con claridad y resalta los contenidos importantes</p>
                                <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_1" autocomplete="off" value="1">
                                <label class="btn btn-outline-primary" for="pregunta_2_1">1</label>

                                <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_2" autocomplete="off" value="2">
                                <label class="btn btn-outline-primary" for="pregunta_2_2">2</label>

                                <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_3" autocomplete="off" value="3">
                                <label class="btn btn-outline-primary" for="pregunta_2_3">3</label>

                                <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_4" autocomplete="off" value="4">
                                <label class="btn btn-outline-primary" for="pregunta_2_4">4</label>

                                <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_5" autocomplete="off" value="5">
                                <label class="btn btn-outline-primary" for="pregunta_2_5">5</label>

                                <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_6" autocomplete="off" value="NS/NC">
                                <label class="btn btn-outline-primary" for="pregunta_2_6">NS/NC</label>
                            </div>

                            <div class="form-group">
                                <p class="font-weight-bold">3. El profesorado ha fomentado un clima de trabajo y participación</p>
                                <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_1" autocomplete="off" value="1">
                                <label class="btn btn-outline-primary" for="pregunta_3_1">1</label>

                                <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_2" autocomplete="off" value="2">
                                <label class="btn btn-outline-primary" for="pregunta_3_2">2</label>

                                <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_3" autocomplete="off" value="3">
                                <label class="btn btn-outline-primary" for="pregunta_3_3">3</label>

                                <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_4" autocomplete="off" value="4">
                                <label class="btn btn-outline-primary" for="pregunta_3_4">4</label>

                                <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_5" autocomplete="off" value="5">
                                <label class="btn btn-outline-primary" for="pregunta_3_5">5</label>

                                <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_6" autocomplete="off" value="NS/NC">
                                <label class="btn btn-outline-primary" for="pregunta_3_6">NS/NC</label>
                            </div>

                            <div class="form-group">
                                <p class="font-weight-bold">4. Las actividades prácticas le han resultado de interés y acordes con los contenidos de la asignatura</p>
                                <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_1" autocomplete="off" value="1">
                                <label class="btn btn-outline-primary" for="pregunta_4_1">1</label>

                                <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_2" autocomplete="off" value="2">
                                <label class="btn btn-outline-primary" for="pregunta_4_2">2</label>

                                <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_3" autocomplete="off" value="3">
                                <label class="btn btn-outline-primary" for="pregunta_4_3">3</label>

                                <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_4" autocomplete="off" value="4">
                                <label class="btn btn-outline-primary" for="pregunta_4_4">4</label>

                                <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_5" autocomplete="off" value="5">
                                <label class="btn btn-outline-primary" for="pregunta_4_5">5</label>

                                <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_6" autocomplete="off" value="NS/NC">
                                <label class="btn btn-outline-primary" for="pregunta_4_6">NS/NC</label>
                            </div>

                            <div class="form-group">
                                <p class="font-weight-bold">5. Los criterios y sistemas de evaluación me parecen adecuados</p>
                                <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_1" autocomplete="off" value="1">
                                <label class="btn btn-outline-primary" for="pregunta_5_1">1</label>

                                <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_2" autocomplete="off" value="2">
                                <label class="btn btn-outline-primary" for="pregunta_5_2">2</label>

                                <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_3" autocomplete="off" value="3">
                                <label class="btn btn-outline-primary" for="pregunta_5_3">3</label>

                                <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_4" autocomplete="off" value="4">
                                <label class="btn btn-outline-primary" for="pregunta_5_4">4</label>

                                <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_5" autocomplete="off" value="5">
                                <label class="btn btn-outline-primary" for="pregunta_5_5">5</label>

                                <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_6" autocomplete="off" value="NS/NC">
                                <label class="btn btn-outline-primary" for="pregunta_5_6">NS/NC</label>
                            </div>

                            <div class="form-group">
                                <p class="font-weight-bold">6. Estoy satisfecho/a con la labor docente del profesorado de esta asignatura</p>
                                <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_1" autocomplete="off" value="1">
                                <label class="btn btn-outline-primary" for="pregunta_6_1">1</label>

                                <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_2" autocomplete="off" value="2">
                                <label class="btn btn-outline-primary" for="pregunta_6_2">2</label>

                                <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_3" autocomplete="off" value="3">
                                <label class="btn btn-outline-primary" for="pregunta_6_3">3</label>

                                <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_4" autocomplete="off" value="4">
                                <label class="btn btn-outline-primary" for="pregunta_6_4">4</label>

                                <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_5" autocomplete="off" value="5">
                                <label class="btn btn-outline-primary" for="pregunta_6_5">5</label>

                                <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_6" autocomplete="off" value="NS/NC">
                                <label class="btn btn-outline-primary" for="pregunta_6_6">NS/NC</label>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold" for="comentarios">Si se desea, añadir cualquier comentario adicional sobre la asignatura:</label>
                                <textarea class="form-control form-area" name="comentarios" id="comentarios" rows="5" cols="100"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Enviar Encuesta</button>
                        </form>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
