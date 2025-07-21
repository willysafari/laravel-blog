<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //the sister table to the products table
    use HasFactory;

    public function posts(){
        
        return $this->hasMany(Post::class);
    }


}
