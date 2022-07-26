<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'faculty_id'
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function students(){
        return $this->hasMany(Student::class, 'group_id')->orderBy('created_at', 'DESC');
    }
}
