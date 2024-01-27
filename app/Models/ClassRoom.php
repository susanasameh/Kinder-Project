<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Teacher;

class ClassRoom extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable= [

   'classesName',
   'price',
   'classesAge',
   'time',
   'capacity',
   'image',
    'published',
    'teacher_id',

    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
