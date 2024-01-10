<?php

namespace App\Http\Controllers;

use App\Models\Study_Regime;
use Illuminate\Http\Request;

class StudyRegimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $study_regimen=Study_Regimen::all();
        return response()->json($study_regimen);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $study_regimen=new Study_Regimen;
        $study_regimen->regimen_estudio=$request->regimen_estudio;
        $study_regimen->save();
        $data=[
            'message'=>'el regimen de estudio ha sido creado',
            'regimen de estudio'=>$faculty
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Study_Regime $study_Regime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Study_Regime $study_Regime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Study_Regime $study_Regime)
    {
        $study_regimen->regimen_estudio=$request->regimen_estudio;
        $study_regimen->save();
        $data=[
            'message'=>'el regimend de estudio ha sido modificado',
            'regimen de estudio'=>$study_regimen
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Study_Regime $study_Regime)
    {
        $study_regimen->delete();
        $data=[
            'message'=>'el regimen de estudio ha sido eliminado',
            'regimen de estudio'=>$study_regimen
        ];
        return response()->json($data);
    }
}
