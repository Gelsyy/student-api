<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
     //devulve un estudiante que se le pasa el nombre y apellido
     public function getEstudianteNombreApellido($nombre, $apellido)
     {
         
         $student = Student::where('nombre', $nombre)
             ->where('apellido', $apellido)
             ->first();
         if ($student) {
             return response()->json($student);
         } else {
             return response()->json(['error' => 'Estudiante no encontrado'], 404);
         }
     }
 
     //devuelve los nombres de los estudiantes becados 
     public function getEstudianteBecado()
{
    $becadoStudentsData = DB::table('students')
        ->join('student__types', 'students.tipo_estudiante_id', '=', 'student__types.id')
        ->join('municipalities', 'students.municipio_id', '=', 'municipalities.id')
        ->join('provinces', 'municipalities.provincie_id', '=', 'provinces.id')
        ->where('student__types.tipo_estudiante', 'becado')
        ->select('students.nombre', 'students.apellido', 'students.carrera', 'municipalities.municicpio as municipio', 'provinces.provincia as provincia')
        ->get();

    return $becadoStudentsData;
}
     //estudiantes nuevo ingreso
     public function getNuevoIngreso()
     {
         $nuevo_ingreso = DB::table('students')
             ->join('academic__states', 'students.situacion_academica_id', '=', 'academic__states.id')
             ->where('academic__states.situacion_academica', 'nuevo ingreso')
             ->select('students.nombre', 'students.apellido', 'students.carrera')
             ->get();
 
         return  $nuevo_ingreso;
     }

     // devuelve los estudiantes
     public function getEstudianteGrupoAnnio($annio, $grupo)
    {
        $students = Student::where('annio', $annio)
                           ->where('grupo', $grupo)
                           ->get(['nombre', 'apellido']);

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
        $students=new Student;
        $students->ci=$request->ci;
        $students->nombre=$request->nombre;
        $students->apellido=$request->apellido;
        $students->direccion=$request->direccion;   
        $students->fecha_nacimiento=$request->fecha_nacimiento;  
        $students->edad=$request->edad;     
        $students->color_piel=$request->color_piel;  
        $students->sexo=$request->sexo;  
        $students->telefono=$request->telefono;   
        $students->pais=$request->pais;    
        $students->nombre_padre=$request->nombre_padre;  
        $students->nombre_madre=$request->nombre_madre;    
        $students->nivel_academico_padre=$request->nivel_academico_padre;    
        $students->nivel_academico_madre=$request->nivel_academico_madre;   
        $students->organizacion_politica=$request->organizacion_politica;    
        $students->estado=$request->estado;   
        $students->centro_trabajo=$request->centro_trabajo;     
        $students->fecha_de_ingreso=$request->fecha_de_ingreso;   
        $students->origen_academico=$request->origen_academico;     
        $students->estado_civil=$request->estado_civil;      
        $students->correo=$request->correo;    
        $students->natural_de=$request->natural_de;     
        $students->fecha_matricula=$request->fecha_matricula;   
        $students->fecha_de_ingreso_ces=$request->fecha_de_ingreso_ces;      
        $students->tipo_servicio=$request->tipo_servicio;    
        $students->grupo=$request->grupo;     
        $students->annio=$request->annio;     
        $students->carrera=$request->carrera;    

        $students->tipo_estudiante_id=$request->tipo_estudiante_id;   
        $students->situacion_academica_id=$request->situacion_academica_id;   
        $students->tipo_curso_id=$request->tipo_curso_id;   
        $students->municipio_id=$request->municipio_id;   
        $students->regimen_estudio_id=$request->regimen_estudio_id;   
        $students->facultad_id=$request->facultad_id;   

        $students->save();
        $data=[
            'message'=>'El estudiante ha sido creado',
            'estudiante'=>$students
        ];
        return response()->json($data);
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
        $students->ci=$request->ci;
        $students->nombre=$request->nombre;
        $students->apellido=$request->apellido;
        $students->direccion=$request->direccion;   
        $students->fecha_nacimiento=$request->fecha_nacimiento;  
        $students->edad=$request->edad;     
        $students->color_piel=$request->color_piel;  
        $students->sexo=$request->sexo;  
        $students->telefono=$request->telefono;   
        $students->pais=$request->pais;    
        $students->nombre_padre=$request->nombre_padre;  
        $students->nombre_madre=$request->nombre_madre;    
        $students->nivel_academico_padre=$request->nivel_academico_padre;    
        $students->nivel_academico_madre=$request->nivel_academico_madre;   
        $students->organizacion_politica=$request->organizacion_politica;    
        $students->estado=$request->estado;   
        $students->centro_trabajo=$request->centro_trabajo;     
        $students->fecha_de_ingreso=$request->fecha_de_ingreso;   
        $students->origen_academico=$request->origen_academico;     
        $students->estado_civil=$request->estado_civil;      
        $students->correo=$request->correo;    
        $students->natural_de=$request->natural_de;     
        $students->fecha_matricula=$request->fecha_matricula;   
        $students->fecha_de_ingreso_ces=$request->fecha_de_ingreso_ces;      
        $students->tipo_servicio=$request->tipo_servicio;    
        $students->grupo=$request->grupo;     
        $students->annio=$request->annio;     
        $students->carrera=$request->carrera;    

        $students->tipo_estudiante_id=$request->tipo_estudiante_id;   
        $students->situacion_academica_id=$request->situacion_academica_id;   
        $students->tipo_curso_id=$request->tipo_curso_id;   
        $students->municipio_id=$request->municipio_id;   
        $students->regimen_estudio_id=$request->regimen_estudio_id;   
        $students->facultad_id=$request->facultad_id; 
        $students->save();
        $data=[
            'message'=>'El estudiante ha sido modificado',
            'estudianate'=>$students
        ];
        return response()->json($data);
     
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
