<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\AsignaturaUser;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturas = Asignatura::all();
        
        $rol_estudiante = Role::where('slug','=','student')->first();

        $estudiantes = User::join('role_user','users.id','=','role_user.user_id')
            ->where('role_user.role_id',$rol_estudiante->id)
            ->select('users.id as id_estudiante','users.name as nombre_estudiante')
            ->get();

        $asignaturasUsuario = AsignaturaUser::join('users','users.id','=','encuestas_asignatura_user.estudiante_id')
            ->join('asignaturas','asignaturas.id','=','encuestas_asignatura_user.asignatura_id')
            ->select('users.id as id_estudiante','users.name as estudiante', 'asignaturas.id as asignatura', 'encuestas_asignatura_user.estado')
            ->get();

        //$asignaturasUsuario = AsignaturaUser::all()->sortBy(['estudiante_id','desc'],['asignatura_id','desc']);

        return view('home',compact('asignaturas','estudiantes','asignaturasUsuario'));
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
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(Asignatura $asignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignatura $asignatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignatura $asignatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignatura $asignatura)
    {
        //
    }
}
