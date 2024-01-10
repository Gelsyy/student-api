<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    
    public function index()
    {
        $province=Province::all();
        return response()->json($province);
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
        $province=new Province;
        $province->provincia=$request->provincia;
        $province->save();
        $data=[
            'message'=>'la provincia ha sido creado',
            'provincia'=>$province
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        $province->provincia=$request->provincia;
        $province->save();
        $data=[
            'message'=>'la provincia ha sido modificado',
            'provincia'=>$province
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        $province->delete();
        $data=[
            'message'=>'la provincia ha sido eliminado',
            'provincia'=>$faculty
        ];
        return response()->json($data);
    }
}
