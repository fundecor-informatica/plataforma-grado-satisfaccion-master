@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header font-weight-bold bg-dark text-white">Asignatura : {{ $asignatura->name }}</div>
    <blockquote>
        <p>A continuación se presentan una serie de cuestiones relativas a la docencia en esta asignatura. Su colaboración es necesaria y consiste en <b>señalar con una “X” dentro del recuadro correspondiente</b>, su grado de acuerdo con cada una de las afirmaciones, teniendo en cuenta que <b>“1”</b> significa <b>“TOTALMENTE EN DESACUERDO”</b> Y <b>“5” “TOTALMENTE DE ACUERDO”</b>. La encuesta es anónima y los datos serán tratados de forma totalmente confidencial. Si el enunciado no procede o no tiene suficiente información para contestar marque la opción <b>NS/NC</b>.</p>
    </blockquote>
    <div class="card-body">
        <form action="{{ route('encuesta.asignatura.store', ['id_encuesta' => $asignaturaUsuario->id , 'id_user' => $user]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <p class="font-weight-bold">1. Los contenidos de la asignatura se adecúan al contexto del Máster</p>
            @if($errors->has('pregunta_1'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Atención!</h5>
                    {{ $errors->first('pregunta_1') }}
                </div>
            @endif
            <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_1" autocomplete="off" value="1" @if( ($asignaturaUsuario->pregunta_1 == '1') or (old('pregunta_1') == '1')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_1_1">1</label>
            <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_2" autocomplete="off" value="2" @if( ($asignaturaUsuario->pregunta_1 == '2') or (old('pregunta_1') == '2')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_1_2">2</label>
            <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_3" autocomplete="off" value="3" @if( ($asignaturaUsuario->pregunta_1 == '3') or (old('pregunta_1') == '3')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_1_3">3</label>
            <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_4" autocomplete="off" value="4" @if( ($asignaturaUsuario->pregunta_1 == '4') or (old('pregunta_1') == '4')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_1_4">4</label>
            <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_5" autocomplete="off" value="5" @if( ($asignaturaUsuario->pregunta_1 == '5') or (old('pregunta_1') == '5')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_1_5">5</label>
            <input type="radio" class="btn-check" name="pregunta_1" id="pregunta_1_6" autocomplete="off" value="NS/NC" @if( ($asignaturaUsuario->pregunta_1 == 'NS/NC') or (old('pregunta_1') == 'NS/NC')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_1_6">NS/NC</label>
        </div>
        <div class="form-group">
            <p class="font-weight-bold">2. El profesorado organiza bien las actividades que se realizan en clase, explica con claridad y resalta los contenidos importantes</p>
            @if($errors->has('pregunta_2'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Atención!</h5>
                    {{ $errors->first('pregunta_2') }}
                </div>
            @endif
            <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_1" autocomplete="off" value="1" @if( ($asignaturaUsuario->pregunta_2 == '1') or (old('pregunta_2') == '1')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_2_1">1</label>
            <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_2" autocomplete="off" value="2" @if( ($asignaturaUsuario->pregunta_2 == '2') or (old('pregunta_2') == '2')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_2_2">2</label>
            <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_3" autocomplete="off" value="3" @if( ($asignaturaUsuario->pregunta_2 == '3') or (old('pregunta_2') == '3')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_2_3">3</label>
            <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_4" autocomplete="off" value="4" @if( ($asignaturaUsuario->pregunta_2 == '4') or (old('pregunta_2') == '4')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_2_4">4</label>
            <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_5" autocomplete="off" value="5" @if( ($asignaturaUsuario->pregunta_2 == '5') or (old('pregunta_2') == '5')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_2_5">5</label>
            <input type="radio" class="btn-check" name="pregunta_2" id="pregunta_2_6" autocomplete="off" value="NS/NC" @if( ($asignaturaUsuario->pregunta_2 == 'NS/NC') or (old('pregunta_2') == 'NS/NC')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_2_6">NS/NC</label>
        </div>
        <div class="form-group">
            <p class="font-weight-bold">3. El profesorado ha fomentado un clima de trabajo y participación</p>
            @if($errors->has('pregunta_3'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Atención!</h5>
                    {{ $errors->first('pregunta_3') }}
                </div>
            @endif
            <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_1" autocomplete="off" value="1" @if( ($asignaturaUsuario->pregunta_3 == '1') or (old('pregunta_3') == '1')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_3_1">1</label>
            <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_2" autocomplete="off" value="2"@if( ($asignaturaUsuario->pregunta_3 == '2') or (old('pregunta_3') == '2')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_3_2">2</label>
            <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_3" autocomplete="off" value="3" @if( ($asignaturaUsuario->pregunta_3 == '3') or (old('pregunta_3') == '3')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_3_3">3</label>
            <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_4" autocomplete="off" value="4" @if( ($asignaturaUsuario->pregunta_3 == '4') or (old('pregunta_3') == '4')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_3_4">4</label>
            <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_5" autocomplete="off" value="5" @if( ($asignaturaUsuario->pregunta_3 == '5') or (old('pregunta_3') == '5')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_3_5">5</label>
            <input type="radio" class="btn-check" name="pregunta_3" id="pregunta_3_6" autocomplete="off" value="NS/NC" @if( ($asignaturaUsuario->pregunta_3 == 'NS/NC') or (old('pregunta_3') == 'NS/NC')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_3_6">NS/NC</label>
        </div>
        <div class="form-group">
            <p class="font-weight-bold">4. Las actividades prácticas le han resultado de interés y acordes con los contenidos de la asignatura</p>
            @if($errors->has('pregunta_4'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Atención!</h5>
                    {{ $errors->first('pregunta_4') }}
                </div>
            @endif
            <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_1" autocomplete="off" value="1" @if( ($asignaturaUsuario->pregunta_4 == '1') or (old('pregunta_4') == '1')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_4_1">1</label>
            <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_2" autocomplete="off" value="2" @if( ($asignaturaUsuario->pregunta_4 == '2') or (old('pregunta_4') == '2')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_4_2">2</label>
            <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_3" autocomplete="off" value="3" @if( ($asignaturaUsuario->pregunta_4 == '3') or (old('pregunta_4') == '3')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_4_3">3</label>
            <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_4" autocomplete="off" value="4" @if( ($asignaturaUsuario->pregunta_4 == '4') or (old('pregunta_4') == '4')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_4_4">4</label>
            <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_5" autocomplete="off" value="5" @if( ($asignaturaUsuario->pregunta_4 == '5') or (old('pregunta_4') == '5')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_4_5">5</label>
            <input type="radio" class="btn-check" name="pregunta_4" id="pregunta_4_6" autocomplete="off" value="NS/NC" @if( ($asignaturaUsuario->pregunta_4 == 'NS/NC') or (old('pregunta_4') == 'NS/NC')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_4_6">NS/NC</label>
        </div>
        <div class="form-group">
            <p class="font-weight-bold">5. Los criterios y sistemas de evaluación me parecen adecuados</p>
            @if($errors->has('pregunta_5'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Atención!</h5>
                    {{ $errors->first('pregunta_5') }}
                </div>
            @endif
            <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_1" autocomplete="off" value="1" @if( ($asignaturaUsuario->pregunta_5 == '1') or (old('pregunta_5') == '1')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_5_1">1</label>
            <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_2" autocomplete="off" value="2" @if( ($asignaturaUsuario->pregunta_5 == '2') or (old('pregunta_5') == '2')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_5_2">2</label>
            <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_3" autocomplete="off" value="3" @if( ($asignaturaUsuario->pregunta_5 == '3') or (old('pregunta_5') == '3')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_5_3">3</label>
            <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_4" autocomplete="off" value="4" @if( ($asignaturaUsuario->pregunta_5 == '4') or (old('pregunta_5') == '4')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_5_4">4</label>
            <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_5" autocomplete="off" value="5" @if( ($asignaturaUsuario->pregunta_5 == '5') or (old('pregunta_5') == '5')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_5_5">5</label>
            <input type="radio" class="btn-check" name="pregunta_5" id="pregunta_5_6" autocomplete="off" value="NS/NC" @if( ($asignaturaUsuario->pregunta_5 == 'NS/NC') or (old('pregunta_5') == 'NS/NC')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_5_6">NS/NC</label>
        </div>
        <div class="form-group">
            <p class="font-weight-bold">6. Estoy satisfecho/a con la labor docente del profesorado de esta asignatura</p>
            @if($errors->has('pregunta_6'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Atención!</h5>
                    {{ $errors->first('pregunta_6') }}
                </div>
            @endif
            <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_1" autocomplete="off" value="1" @if( ($asignaturaUsuario->pregunta_6 == '1') or (old('pregunta_6') == '1')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_6_1">1</label>
            <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_2" autocomplete="off" value="2" @if( ($asignaturaUsuario->pregunta_6 == '2') or (old('pregunta_6') == '2')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_6_2">2</label>
            <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_3" autocomplete="off" value="3" @if( ($asignaturaUsuario->pregunta_6 == '3') or (old('pregunta_6') == '3')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_6_3">3</label>
            <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_4" autocomplete="off" value="4" @if( ($asignaturaUsuario->pregunta_6 == '4') or (old('pregunta_6') == '4')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_6_4">4</label>
            <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_5" autocomplete="off" value="5" @if( ($asignaturaUsuario->pregunta_6 == '5') or (old('pregunta_6') == '5')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_6_5">5</label>
            <input type="radio" class="btn-check" name="pregunta_6" id="pregunta_6_6" autocomplete="off" value="NS/NC" @if( ($asignaturaUsuario->pregunta_6 == 'NS/NC') or (old('pregunta_6') == 'NS/NC')) checked @endif >
            <label class="btn btn-outline-primary" for="pregunta_6_6">NS/NC</label>
        </div>
        <div class="form-group" >
            <label class="font-weight-bold" for="comentarios">Si se desea, añadir cualquier comentario adicional sobre la asignatura:</label>
            <textarea class="form-control form-area" name="comentarios" id="comentarios" rows="5" cols="100">{{ $asignaturaUsuario->comentarios ?? old('comentarios') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enviar Encuesta</button>
        </form>
    </div>
</div>
@endsection
