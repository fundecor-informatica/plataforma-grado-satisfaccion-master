<!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="javascript:history.back()" class="btn btn-primary mx-0 mb-3"><i class="fas fa-chevron-circle-left"></i> Volver Atrás</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    @if(count($groupIncidencias) > 0)
                        <span class="badge badge-danger navbar-badge">{{ count($groupIncidencias) }}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">{{ count($groupIncidencias) }} Incidencias</span>
                    @foreach($groupIncidencias as $groupIncidencia)
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> {{ $groupIncidencia->nombre_emisor.': ' .$groupIncidencia->asunto_notificacion }}
                            <!--<span class="float-right text-muted text-sm">3 mins</span>-->
                            </a>
                        @endforeach
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    @if(count($groupNormales) > 0)
                        <span class="badge badge-warning navbar-badge">{{ count($groupNormales) }}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">{{ count($groupNormales) }} Notificaciones</span>
                    @foreach($groupNormales as $groupNormal)
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> {{ $groupNormal->nombre_emisor.': '.$groupNormal->asunto_notificacion }}
                        <!--<span class="float-right text-muted text-sm">3 mins</span>-->
                        </a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="button">
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
