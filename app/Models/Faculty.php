<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
        ];

    public function groups(){
        return $this->hasMany(Group::class, 'faculty_id')->orderBy('created_at', 'DESC');
    }
}
