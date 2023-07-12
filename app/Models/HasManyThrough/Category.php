<?php

namespace App\Models\HasManyThrough;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    public function items(){
        return $this->hasManyThrough(Item::class, SubCategory::class);
    }
}
