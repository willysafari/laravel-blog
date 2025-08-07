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

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('body', 'like', '%' . $search . '%')
        );
        

         $query->when($filters['category'] ?? false, function ($query, $category) {

            $query->
                  whereExists(fn ($query) =>
                     $query->from('categories')
                      ->whereColumn('categories.id', 'posts.category_id')
                      ->where('categories.slug', $category)
                    );
        });
      
            
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    } 

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

}
