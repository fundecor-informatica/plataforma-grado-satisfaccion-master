<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\AsignaturaUser;
use App\Models\Director;
use App\Models\Notification;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DirectorController extends Controller
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

        $asignaturas = Asignatura::all();

        $rol_estudiante = Role::where('slug','=','student')->first();

        $estudiantes = User::join('role_user','users.id','=','role_user.user_id')
            ->where('role_user.role_id',$rol_estudiante->id)
            ->select('users.id as id_estudiante','users.name as nombre_estudiante')
            ->get();

        $asignaturasUsuarios = AsignaturaUser::join('users','users.id','=','encuestas_asignatura_user.estudiante_id')
            ->join('asignaturas','asignaturas.id','=','encuestas_asignatura_user.asignatura_id')
            ->select('users.id as id_estudiante','users.name as estudiante', 'asignaturas.id as asignatura', 'encuestas_asignatura_user.estado')
            ->get();

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

        return view('director.index',compact('asignaturas','estudiantes','asignaturasUsuarios','asignaturaUsuario','groupIncidencias','groupNormales','notifications'));
    }

    public function encuestasAsignaturas(Request $request)
    {
        $groupIncidencias = array();
        $groupNormales = array();

        $asignaturaSelected = $request->asignatura;

        $asignaturas = Asignatura::all();

        $rol_estudiante = Role::where('slug','=','student')->first();

        $estudiantes = User::join('role_user','users.id','=','role_user.user_id')
            ->where('role_user.role_id',$rol_estudiante->id)
            ->select('users.id as id_estudiante','users.name as nombre_estudiante')
            ->get();

        $asignaturasUsuarios = AsignaturaUser::join('users','users.id','=','encuestas_asignatura_user.estudiante_id')
            ->join('asignaturas','asignaturas.id','=','encuestas_asignatura_user.asignatura_id')
            ->select('users.id as id_estudiante','users.name as estudiante', 'asignaturas.id as asignatura', 'encuestas_asignatura_user.estado','encuestas_asignatura_user.pregunta_1','encuestas_asignatura_user.pregunta_2','encuestas_asignatura_user.pregunta_3','encuestas_asignatura_user.pregunta_4','encuestas_asignatura_user.pregunta_5','encuestas_asignatura_user.pregunta_6')
            ->orderBy('encuestas_asignatura_user.estudiante_id','asc')
            ->orderBy('encuestas_asignatura_user.asignatura_id','asc')
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

        return view('director.listadoEncuestasAsignaturas',compact('asignaturaSelected','asignaturas','estudiantes','asignaturasUsuarios','groupIncidencias','groupNormales','notifications'));
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
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        //
    }
}
