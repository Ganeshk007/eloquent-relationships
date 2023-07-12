<?php

namespace App\Models\ManyToMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    public function roles(){
        return $this->belongsToMany(Role::class, CustomerRole::class, 'role_id', 'id');
    }
}
