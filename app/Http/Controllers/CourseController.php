<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $course=Course::all();
            return response()->json($course);
            }
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
        $course=new Course;
        $course->curso=$request->curso;
        $course->save();
        $data=[
            'message'=>'el curso ha sido creado',
            'curso'=>$course
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->curso=$request->curso;
        $course->save();
        $data=[
            'message'=>'el curso ha sido modificado',
            'curso'=>$course
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        $data=[
            'message'=>'el curso ha sido eliminado',
            'course'=>$course
        ];
        return response()->json($data);
    }
}
