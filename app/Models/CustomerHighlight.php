<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerHighlight extends Model
{
    use HasFactory;
    protected $table = 'customer_hightlights';
    public function imageReview()
    {
        return  asset('image/custommer/' . $this->image);
    }
}
