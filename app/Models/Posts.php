<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory;
    protected $table= 'posts';
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function imagePost(){
        return asset('image/post/' . $this->image);
    }
}
