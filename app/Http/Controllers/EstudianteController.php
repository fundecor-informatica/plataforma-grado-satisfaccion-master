<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\AsignaturaUser;
use App\Models\Estudiante;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupIncidencias = array();
        $groupNormales = array();

        $asignaturaUsuario = AsignaturaUser::join('users','users.id','=','encuestas_asignatura_user.estudiante_id')
            ->join('asignaturas','asignaturas.id','=','encuestas_asignatura_user.asignatura_id')
            ->where('users.id', Auth::id())
            ->select('users.id as id_estudiante','users.name as estudiante', 'asignaturas.id as id_asignatura', 'asignaturas.name as nombre_asignatura' , 'encuestas_asignatura_user.estado as estado_asignatura')
            ->get();

        $notifications = Notification::join('users','users.id','=','notifications.From_user_id')
            ->where('notifications.To_user_id', Auth::id())
            ->select('users.name as nombre_emisor', 'notifications.id as id_notificacion', 'notifications.subject as asunto_notificacion', 'notifications.body as mensaje_notificacion', 'notifications.type_notification as tipo_notificacion', 'notifications.estado as estado_notificacion')
            ->get();

        foreach ($notifications as $notification) {
            if ($notification->estado_notificacion == "no_leido") {
                if ($notification->tipo_notificacion == "incidencia") {
                    //$num_incidencias_no_leidas = $num_incidencias_no_leidas + 1;
                    $groupIncidencias[] = $notification;
                }
                if ($notification->tipo_notificacion == "normal") {
                    //$num_normales_no_leidas = $num_normales_no_leidas + 1;
                    $groupNormales[] = $notification;
                }
            }
        }

        return view('student.index',compact('asignaturaUsuario','groupIncidencias','groupNormales','notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    public function encuestaAsignatura(Asignatura $asignatura)
    {
        $groupIncidencias = array();
        $groupNormales = array();

        Asignatura::findOrFail($asignatura->id);
        $user = Auth::id();
        $asignaturaUsuario = AsignaturaUser::where('asignatura_id','=',$asignatura->id)->where('estudiante_id','=',$user)->first();

        $notifications = Notification::join('users','users.id','=','notifications.From_user_id')
            ->where('notifications.To_user_id', Auth::id())
            ->select('users.name as nombre_emisor', 'notifications.id as id_notificacion', 'notifications.subject as asunto_notificacion', 'notifications.body as mensaje_notificacion', 'notifications.type_notification as tipo_notificacion', 'notifications.estado as estado_notificacion')
            ->get();

        foreach ($notifications as $notification) {
            if ($notification->estado_notificacion == "no_leido") {
                if ($notification->tipo_notificacion == "incidencia") {
                    //$num_incidencias_no_leidas = $num_incidencias_no_leidas + 1;
                    $groupIncidencias[] = $notification;
                }
                if ($notification->tipo_notificacion == "normal") {
                    //$num_normales_no_leidas = $num_normales_no_leidas + 1;
                    $groupNormales[] = $notification;
                }
            }
        }

        return view('student.formEncuestaAsignatura',compact('asignaturaUsuario','user','asignatura','groupIncidencias','groupNormales','notifications'));
    }

    public function guardarEncuestaAsignatura(Request $request)
    {
        $data = AsignaturaUser::findOrFail($request->id_encuesta);
        $estudiante = User::findOrFail($request->id_user);
        $asignatura = Asignatura::findOrFail($data->asignatura_id);
        $incidencia = 0;

        if(Auth::id() == $estudiante->id) {
            $request->validate([
                'pregunta_1' => 'required',
                'pregunta_2' => 'required',
                'pregunta_3' => 'required',
                'pregunta_4' => 'required',
                'pregunta_5' => 'required',
                'pregunta_6' => 'required',
            ]);

            for($i=1;$i<=6;$i++){
                $variable = "pregunta_".$i;
                if($request->$variable <=3){
                    $incidencia = 1;
                }
            }

            $data->pregunta_1 = $request->pregunta_1;
            $data->pregunta_2 = $request->pregunta_2;
            $data->pregunta_3 = $request->pregunta_3;
            $data->pregunta_4 = $request->pregunta_4;
            $data->pregunta_5 = $request->pregunta_5;
            $data->pregunta_6 = $request->pregunta_6;
            $data->comentarios = $request->comentarios;

            if($incidencia == 1){
                $data->estado = 'Finalizada_Con_Incidencias';
                $request = new Request([
                    'From_user_id' => $estudiante->id,
                    'To_user_id' => "90007ebc-378f-4bb6-9a7b-97fe74d2ec8e",
                    'subject' => 'Evaluación Asignatura',
                    'body' => 'El usuario: '. $estudiante->name . ' ha relizado la encuesta de la asignatura: '. $asignatura->name . ', con un grado insatisfactorio',
                    'type_notification' => 'incidencia',
                ]);
            }
            else{
                $data->estado = 'Finalizada_Sin_Incidencias';
                $request = new Request([
                    'From_user_id' => $estudiante->id,
                    'To_user_id' => '90007ebc-378f-4bb6-9a7b-97fe74d2ec8e',
                    'subject' => 'Evaluación Asignatura',
                    'body' => 'El usuario: '. $estudiante->name . ' ha relizado la encuesta de la asignatura: '. $asignatura->name . ', con un grado satisfactorio',
                    'type_notification' => 'normal',
                ]);
            }

            $data->save();

            $notification = new NotificationController();
            $notification->store($request);

            return redirect(route('student.home'))->with('success', 'Se ha completado la encuesta de la asignatura <b>' . $asignatura->name . '</b>');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
