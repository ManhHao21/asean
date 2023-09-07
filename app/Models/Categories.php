<?php

namespace App\Models;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'parent_id'
    ];
    public function posts()
    {
        return $this->hasMany(Posts::class, "category_id", "id");
    }
  
    public function subcategories()
    {
        return $this->hasMany(Categories::class, 'parent_id');
    }
}
