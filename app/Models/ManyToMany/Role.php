<?php

namespace App\Models\ManyToMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    public function customers(){
        return $this->belongsToMany(Customer::class, CustomerRole::class, 'user_id', 'id');
    }
}
