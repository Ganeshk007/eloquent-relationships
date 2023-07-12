<?php

namespace App\Models\OneToOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePhone extends Model
{
    use HasFactory;

    protected $table = "employee_phones";

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
