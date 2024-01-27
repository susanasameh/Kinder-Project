<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ClassRoom;

class Teacher extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[

        'TeachersName',
        'designation',
        'facebook',
        'twitter',
        'instagram',
        'image',
        'published',


    ];

    public function classRoom(){
        return $this->hasMany(ClassRoom::class);
    }
}
