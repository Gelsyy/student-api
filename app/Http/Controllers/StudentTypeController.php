<?php

namespace App\Http\Controllers;

use App\Models\Student_Type;
use Illuminate\Http\Request;

class StudentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_type=Student_Type::all();
            return response()->json($student_type);
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
        $student_type=new Student_Type;
        $student_type->tipo_estudiante=$request->tipo_estudiante;
        $student_type->save();
        $data=[
            'message'=>'EL TIPO DE ESTUDIANTE ha sido creado',
            'TIPO_ESTUDIANTE'=>$student_type
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student_Type $student_Type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student_Type $student_Type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student_Type $student_Type)
    {
        $student_type->tipo_estudiante=$request->tipo_estudiante;
        $student_type->save();
        $data=[
            'message'=>'el tipo de estudiante ha sido modificado',
            'tipo de estudiante'=>$student_type
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student_Type $student_Type)
    {
        $student_type->delete();
        $data=[
            'message'=>'el tipo de estudiante ha sido eliminado',
            'tipo de estudiante'=>$student_type
        ];
        return response()->json($data);
    }
}
