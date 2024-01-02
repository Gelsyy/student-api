<?php

namespace App\Http\Controllers;

use App\Models\Academic_State;
use Illuminate\Http\Request;

class AcademicStateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academic_states=Academic_State::all();
        return response()->json($academic_states);
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $academic_states=new Academic_State;
        $academic_states->situacion_academica=$request->situacion_academica;
        $academic_states->save();
        $data=[
            'message'=>'Estado academico ha sido creado',
            'academic_states'=>$academic_states
        ];
        return response()->json($data);

    }

    /**
     * Display the specified resource.
     */
    public function show(Academic_State $academic_state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Academic_State $academic_state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Academic_State $academic_states)
    {
        
        
        $academic_states->situacion_academica=$request->situacion_academica;
        $academic_states->save();
        $data=[
            'message'=>'Estado academico ha sido modificado',
            'situacion_academica'=>$academic_states
        ];
        return response()->json($data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Academic_State $academic_states)
    {
        $academic_states->delete();
        $data=[
            'message'=>'Estado academico ha sido eliminado',
            'academic_states'=>$academic_states
        ];
        return response()->json($data);

    }
}
