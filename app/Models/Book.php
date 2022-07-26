<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'author_id',
        'count'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

//    protected $casts = [
//        'created_at'
//    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
