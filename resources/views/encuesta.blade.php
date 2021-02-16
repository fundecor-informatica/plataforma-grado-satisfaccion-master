@extends('encuesta.parentBlock')

@php
    use App\Http\Controllers\EncuestaFactoryController;

    $model = $encuesta;
    $question = array();
    $question[] = EncuestaFactoryController::makeQuestionRadio('1 - ¿Cree que existen actitudes proclives al esfuerzo en el trabajo en su territorio?', 'pregunta1_1',$model->pregunta1_1 ?? old('pregunta1_1'), $model->estado);
    $question[] = EncuestaFactoryController::makeQuestionRadio('2 - ¿Cree que las empresas incorporan elementos de carácter ético en los procesos de toma de decisiones, así como en el resto de las operaciones?', 'pregunta1_2', $model->pregunta1_2 ?? old('pregunta1_2'),$model->estado);
    $question[] = EncuestaFactoryController::makeQuestionRadio('3 - ¿Percibe la sociedad la figura del empresario en su territorio como un generador de rentas?', 'pregunta1_3', $model->pregunta1_3 ?? old('pregunta1_3'), $model->estado);
    //$question[] = EncuestaFactoryController::makeQuestionRadio('3.2 - ¿Se considera como un agente extractor o generador de rentas?', 'pregunta1_3_2', $model->pregunta1_3_2 ?? old('pregunta1_3_2'), $model->estado);
    $question[] = EncuestaFactoryController::makeQuestionRadio('4 - ¿Cree que la toma de decisiones en el ámbito privado es ágil?', 'pregunta1_4', $model->pregunta1_4 ?? old('pregunta1_4'), $model->estado);
	$question[] = EncuestaFactoryController::makeQuestionRadio('5 - ¿Cree que la toma de decisiones en el ámbito público es ágil?', 'pregunta1_5', $model->pregunta1_5 ?? old('pregunta1_5'), $model->estado);
    $question[] = EncuestaFactoryController::makeQuestionRadio('6 - Los procesos de innovación requieren tanto de personas como entornos y territorios innovadores. En su opinión, ¿los empleados actúan de manera creativa e innovadora?', 'pregunta1_6', $model->pregunta1_6 ?? old('pregunta1_6'), $model->estado);
    $question[] = EncuestaFactoryController::makeQuestionRadio('7 - ¿El entorno fomenta y apoya estas actitudes?', 'pregunta1_7', $model->pregunta1_7 ?? old('pregunta1_7'), $model->estado);
    $question[] = EncuestaFactoryController::makeQuestionRadio('8 - ¿Considera que las empresas de su territorio han sido flexibles y se han adaptado a los cambios y a las necesidades y características del mercado?', 'pregunta1_8', $model->pregunta1_8 ?? old('pregunta1_8'), $model->estado);
@endphp


@section('survey')
    <div class="card">
        <div class="card-header font-weight-bold bg-dark text-white">Bloque 1: Capital social y cultural</div>
        <div class="card-body">
            <form action="{{ route('encuesta.update', ['encuestum' => $encuesta->id , 'block' => 1]) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <p class="font-weight-bold">1. Los contenidos de la asignatura se adecúan al contexto del Máster</p>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_1" id="pregunta_1_1" value="1">
                        <label class="form-check-label" for="pregunta_1_1">1</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_1" id="pregunta_1_2" value="2">
                        <label class="form-check-label" for="pregunta_1_2">2</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_1" id="pregunta_1_3" value="3">
                        <label class="form-check-label" for="pregunta_1_3">3</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_1" id="pregunta_1_4" value="4">
                        <label class="form-check-label" for="pregunta_1_4">4</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_1" id="pregunta_1_5" value="5">
                        <label class="form-check-label" for="pregunta_1_5">5</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_1" id="pregunta_1_6" value="NS/NC">
                        <label class="form-check-label" for="pregunta_1_6">NS/NC</label>
                    </div>
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">2. El profesorado organiza bien las actividades que se realizan en clase, explica con claridad y resalta los contenidos importantes</p>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_2" id="pregunta_2_1" value="1">
                        <label class="form-check-label" for="pregunta_2_1">1</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_2" id="pregunta_2_2" value="2">
                        <label class="form-check-label" for="pregunta_2_2">2</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_2" id="pregunta_2_3" value="3">
                        <label class="form-check-label" for="pregunta_2_3">3</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_2" id="pregunta_2_4" value="4">
                        <label class="form-check-label" for="pregunta_2_4">4</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_2" id="pregunta_2_5" value="5">
                        <label class="form-check-label" for="pregunta_2_5">5</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_2" id="pregunta_2_6" value="NS/NC">
                        <label class="form-check-label" for="pregunta_2_6">NS/NC</label>
                    </div>
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">3. El profesorado ha fomentado un clima de trabajo y participación</p>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_3" id="pregunta_3_1" value="1">
                        <label class="form-check-label" for="pregunta_3_1">1</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_3" id="pregunta_3_2" value="2">
                        <label class="form-check-label" for="pregunta_3_2">2</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_3" id="pregunta_3_3" value="3">
                        <label class="form-check-label" for="pregunta_3_3">3</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_3" id="pregunta_3_4" value="4">
                        <label class="form-check-label" for="pregunta_3_4">4</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_3" id="pregunta_3_5" value="5">
                        <label class="form-check-label" for="pregunta_3_5">5</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_3" id="pregunta_3_6" value="NS/NC">
                        <label class="form-check-label" for="pregunta_3_6">NS/NC</label>
                    </div>
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">4. Las actividades prácticas le han resultado de interés y acordes con los contenidos de la asignatura</p>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_4" id="pregunta_4_1" value="1">
                        <label class="form-check-label" for="pregunta_4_1">1</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_4" id="pregunta_4_2" value="2">
                        <label class="form-check-label" for="pregunta_4_2">2</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_4" id="pregunta_4_3" value="3">
                        <label class="form-check-label" for="pregunta_4_3">3</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_4" id="pregunta_4_4" value="4">
                        <label class="form-check-label" for="pregunta_4_4">4</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_4" id="pregunta_4_5" value="5">
                        <label class="form-check-label" for="pregunta_4_5">5</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_4" id="pregunta_4_6" value="NS/NC">
                        <label class="form-check-label" for="pregunta_4_6">NS/NC</label>
                    </div>
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">5. Los criterios y sistemas de evaluación me parecen adecuados</p>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_5" id="pregunta_5_1" value="1">
                        <label class="form-check-label" for="pregunta_5_1">1</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_5" id="pregunta_5_2" value="2">
                        <label class="form-check-label" for="pregunta_5_2">2</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_5" id="pregunta_5_3" value="3">
                        <label class="form-check-label" for="pregunta_5_3">3</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_5" id="pregunta_5_4" value="4">
                        <label class="form-check-label" for="pregunta_5_4">4</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_5" id="pregunta_5_5" value="5">
                        <label class="form-check-label" for="pregunta_5_5">5</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_5" id="pregunta_5_6" value="NS/NC">
                        <label class="form-check-label" for="pregunta_5_6">NS/NC</label>
                    </div>
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">6. Estoy satisfecho/a con la labor docente del profesorado de esta asignatura</p>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_6" id="pregunta_6_1" value="1">
                        <label class="form-check-label" for="pregunta_6_1">1</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_6" id="pregunta_6_2" value="2">
                        <label class="form-check-label" for="pregunta_6_2">2</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_6" id="pregunta_6_3" value="3">
                        <label class="form-check-label" for="pregunta_6_3">3</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_6" id="pregunta_6_4" value="4">
                        <label class="form-check-label" for="pregunta_6_4">4</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_6" id="pregunta_6_5" value="5">
                        <label class="form-check-label" for="pregunta_6_5">5</label>
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="pregunta_6" id="pregunta_6_6" value="NS/NC">
                        <label class="form-check-label" for="pregunta_6_6">NS/NC</label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="comentarios">Si se desea, añadir cualquier comentario adicional sobre la asignatura:</label>
                    <textarea class="form-control form-area" name="comentarios" id="comentarios" rows="5" cols="100"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar Encuesta</button>
            </form>
        </div>
    </div>
@endsection
