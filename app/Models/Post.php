<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    //mass assigments
    use HasFactory;
  
    protected $guarded = [];

    protected $with = ['category','author'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    } 

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
