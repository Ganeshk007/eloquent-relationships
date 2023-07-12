<?php

namespace App\Models\OneToOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OneToOne\EmployeePhone;

class Employee extends Model
{
    use HasFactory;

    public function phone(){
        return $this->hasOne(EmployeePhone::class, 'employee_id', 'id');
    }
}
