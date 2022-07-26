<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'group_id'
    ];

    public function group(){
        return $this->belongsTo(Group::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
