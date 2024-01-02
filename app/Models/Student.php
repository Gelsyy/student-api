<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function student_type(){
        return this->belongsTo(Student_Type::class, 'tipo_estudiante_id');
    }

     public function academic_state(){
        return this->belongsTo(Academic_State::class, 'situacion_academica_id');
    } 
    
    public function course(){
        return this->belongsTo(Course::class, 'tipo_curso_id');
    }

    public function municipality(){
            return this->belongsTo(Municipality::class, 'municipio_id');
    }    
    
    
    public function study_regime(){
    return this->belongsTo(Study_Regime::class, 'regimen_estudio_id');
    }

    public function faculty(){
        return this->belongsTo(Faculty::class, 'facultad_id');
    }

}
