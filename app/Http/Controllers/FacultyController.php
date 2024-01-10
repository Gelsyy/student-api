<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    
    public function index()
    {
        
            $faculty=Faculty::all();
            return response()->json($faculty);
            
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
        $faculty=new Faculty;
        $faculty->facultad=$request->facultad;
        $faculty->save();
        $data=[
            'message'=>'la facultad ha sido creado',
            'facultad'=>$faculty
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faculty $faculty)
    {
        $faculty->facultad=$request->facultad;
        $faculty->save();
        $data=[
            'message'=>'la facultad ha sido modificado',
            'facultad'=>$faculty
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $faculty)
    { 
        $faculty->delete();
        $data=[
            'message'=>'la facultad ha sido eliminado',
            'facultad'=>$faculty
        ];
        return response()->json($data);

    
    }
}
