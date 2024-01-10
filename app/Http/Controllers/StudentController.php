<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

     //devuelve los nombres de los estudiantes becados 
     public function getBecadoStudentsNames()
     {
         $becadoStudentsNames = DB::table('students')
             ->join('student__types', 'students.tipo_estudiante_id', '=', 'student__types.id')
             ->where('student__types.tipo_estudiante', 'becado')
             ->select('students.nombre', 'students.apellido', 'students.carrera')
             ->get();
 
         return $becadoStudentsNames;
     }

     // devuelve los estudiantes
     public function getStudentsByYearAndGroup($annio, $grupo)
    {
        $students = Student::where('annio', $annio)
                           ->where('grupo', $grupo)
                           ->pluck('nombre');

        return $students;
    }



    
   //muestra todos los estudiantes
    public function index()
    {
        $student=Student::all();
        return response()->json( $student);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        $data=[
            'message'=>'el estudiante ha sido eliminado',
            'facultad'=>$student
        ];
        return response()->json($data);
    }
}
