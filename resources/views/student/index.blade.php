@extends('layouts.app')

@section('content')
    <div class="card-deck mt-2">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado Asignaturas Estudiante</h3>
            </div>
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: auto;">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: auto;">Asignatura</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: auto;">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($asignaturaUsuario as $usuarioAsignatura)
                                <tr role="row" class="even">
                                    <td>{{ $usuarioAsignatura->id_asignatura }}</td>
                                    <td>{{ $usuarioAsignatura->nombre_asignatura }}</td>
                                    @switch($usuarioAsignatura->estado_asignatura)
                                        @case('No_Iniciada')
                                        <td><a href="{{ route('encuesta.asignatura.view', ['asignatura' => $usuarioAsignatura->id_asignatura]) }}"><i class="fas fa-file-signature"></i></a></td>
                                        @break
                                        @case('Iniciada')
                                        <td><a href="#"><i class="far fa-pause-circle"></i></a></td>
                                        @break
                                        @case('Finalizada_Con_Incidencias')
                                        <td><a href="#"><i class="far fa-check-circle"></i></a></td>
                                        @break
                                        @case('Finalizada_Sin_Incidencias')
                                        <td><a href="#"><i class="far fa-check-circle"></i></a></td>
                                        @break
                                    @endswitch
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
                                                <option value="no_leido" @if($notification->estado_notificacion == "no_leido") selected @endif>No leido</option>
                                                <option value="leido" @if($notification->estado_notificacion == "leido") selected @endif>Leido</option>
                                                <option value="finalizado" @if($notification->estado_notificacion == "finalizado") selected @endif>Finalizado</option>
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
    </div>
@endsection
