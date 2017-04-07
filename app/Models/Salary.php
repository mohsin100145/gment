<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';

    protected $fillable = ['employee_id', 'year_id', 'month_id', 'days_of_month', 'days_of_attendance', 'salary_earn', 'hours_of_overtime', 'overtime_earn', 'gross_salary', 'remarks', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function month()
    {
        return $this->belongsTo(Month::class);
    }
}
