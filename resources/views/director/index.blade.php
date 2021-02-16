@extends('layouts.app')

@section('content')
    <div class="card-deck mt-2">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado Asignaturas</h3>
            </div>
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
                                    <td><a href="{{ route('encuestas.asignaturas.view', ['asignatura' => $asignatura->id]) }}"><span class="badge bg-danger">{{ $num_asignaturas_encuestadas }}%</span></td>
                                @elseif($num_asignaturas_encuestadas < 70)
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: {{ $num_asignaturas_encuestadas }}%"></div>
                                        </div>
                                    </td>
                                    <td><a href="{{ route('encuestas.asignaturas.view', ['asignatura' => $asignatura->id]) }}"><span class="badge bg-warning">{{ $num_asignaturas_encuestadas }}%</span></td>
                                @else
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" style="width: {{ $num_asignaturas_encuestadas }}%"></div>
                                        </div>
                                    </td>
                                    <td><a href="{{ route('encuestas.asignaturas.view', ['asignatura' => $asignatura->id]) }}"> <span class="badge bg-success">{{ $num_asignaturas_encuestadas }}%</span></a></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            <!--<div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>-->
        </div>
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Notificaciones</h3>

                    <!--<div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search Mail">
                            <div class="input-group-append">
                                <div class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <!--<div class="mailbox-controls">
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-reply"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <div class="float-right">
                            1-50/200
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>-->
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>De</th>
                                <th>Asunto </th>
                                <!--<th>Mensaje </th>-->
                                <th>Tipo </th>
                                <th>Estado </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($notifications->count()>0)
                                @foreach($notifications as $notification)
                                    <tr>
                                        <td class="mailbox-name"><a href="read-mail.html">{{ $notification->nombre_emisor }}</a></td>
                                        <td class="mailbox-subject"><b>{{ $notification->asunto_notificacion }}</b></td>
                                    <!--<td class="mailbox-subject">{{ substr($notification->mensaje_notificacion,0,50) }}</td>-->
                                        <td class="mailbox-name">{{ $notification->tipo_notificacion }}</td>
                                        <td class="mailbox-estado">
                                            <select >
                                                <option @if($notification->estado_notificacion == "no_leido") selected @endif>No leido</option>
                                                <option @if($notification->estado_notificacion == "leido") selected @endif>Leido</option>
                                                <option @if($notification->estado_notificacion == "finalizado") selected @endif>Finalizado</option>
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="mailbox-name">No existen notificaciones</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <!--<div class="card-footer p-0">
                    <div class="mailbox-controls">
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                            <i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-reply"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <div class="float-right">
                            1-50/200
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            <!-- /.card -->
        </div>
    <!--<div class="card">
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
    </div>-->
    </div>
@endsection
