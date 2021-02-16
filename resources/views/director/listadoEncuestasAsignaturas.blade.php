@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-10">
            <!-- Custom Tabs -->
            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">Asignaturas</h3>
                    <ul class="nav nav-pills ml-auto p-2">
                        @foreach($asignaturas as $asignatura)
                            <li class="nav-item"><a  @if($asignatura->id == $asignaturaSelected) class="nav-link active" @else class="nav-link" @endif  href="#tab_{{ $asignatura->id }}" data-toggle="tab">{{ $asignatura->name }}</a></li>
                        @endforeach
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        @foreach($asignaturas as $asignatura)
                        <div id="tab_{{ $asignatura->id }}" @if($asignatura->id == $asignaturaSelected) class="tab-pane active" @else class="tab-pane" @endif >
                            <table class="table table-head-fixed">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Estudiante</th>
                                    @for($i=1;$i<=6;$i++)
                                        <th>{{ 'Pregunta_'.$i }}</th>
                                    @endfor
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($estudiantes as $estudiante)
                                    <tr>
                                        <td><i class="fas fa-user"></i></td>
                                        <td>{{ $estudiante->nombre_estudiante }}</td>
                                            @foreach($asignaturasUsuarios as $asignaturasUsuario)
                                                @if($asignatura->id == $asignaturasUsuario->asignatura and $estudiante->id_estudiante == $asignaturasUsuario->id_estudiante)
                                                    <td>@if($asignaturasUsuario->pregunta_1 <= 3) <i class="far fa-times-circle"></i> @else <i class="far fa-check-circle"></i> @endif</td>
                                                    <td>@if($asignaturasUsuario->pregunta_2 <= 3) <i class="far fa-times-circle"></i> @else <i class="far fa-check-circle"></i> @endif</td>
                                                    <td>@if($asignaturasUsuario->pregunta_3 <= 3) <i class="far fa-times-circle"></i> @else <i class="far fa-check-circle"></i> @endif</td>
                                                    <td>@if($asignaturasUsuario->pregunta_4 <= 3) <i class="far fa-times-circle"></i> @else <i class="far fa-check-circle"></i> @endif</td>
                                                    <td>@if($asignaturasUsuario->pregunta_5 <= 3) <i class="far fa-times-circle"></i> @else <i class="far fa-check-circle"></i> @endif</td>
                                                    <td>@if($asignaturasUsuario->pregunta_6 <= 3) <i class="far fa-times-circle"></i> @else <i class="far fa-check-circle"></i> @endif</td>
                                                @endif
                                            @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
        </div>
        <!-- /.col -->
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
@endsection
