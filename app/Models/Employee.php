<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = ['name', 'joining_date', 'salary', 'basic_salary', 'home_allowance', 'food_allowance', 'medical_allowance', 'conveyance_allowance', 'salary_increment', 'mobile_no', 'address', 'image', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'];
}
