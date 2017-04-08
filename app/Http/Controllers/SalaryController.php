<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalaryRequest;
use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $salaries = Salary::with(['employee', 'year', 'month'])->get();
        return view('salary.index', compact('salaries'));
    }

    public function create()
    {
        $monthList = DB::table('months')->pluck('name', 'id');
        $yearList = DB::table('years')->pluck('year', 'id');
        return view('salary.create', compact('monthList', 'yearList'));
    }

    public function store(SalaryRequest $request)
    {
        $authId = Auth::id();
        $employee = Employee::find($request->employee_id);
        if (!count($employee)) {
            flash()->error(' Successfully Created');
            return redirect()->back();
        } else {
            Salary::create([
                                 'employee_id' => $request->employee_id,
                                 'year_id' => $request->year_id,
                                 'month_id' => $request->month_id,
                                 'days_of_month' => $request->days_of_month,
                                 'days_of_attendance' => $request->days_of_attendance,
                                 'salary_earn' => ($employee->salary / $request->days_of_month) * $request->days_of_attendance,
                                 'hours_of_overtime' => $request->hours_of_overtime,
                                 'overtime_earn' => $request->hours_of_overtime * (($employee->basic_salary / 208) * 2),
                                 'gross_salary' => (($employee->salary / $request->days_of_month) * $request->days_of_attendance) + ($request->hours_of_overtime * ($employee->basic_salary / 208) * 2),
                                 'created_by' => $authId,
                                 'updated_by' => $authId
                             ]);

            flash()->message('Salary of '.$employee->name.' is Successfully Created');

            return redirect('salary');
        }
    }

    public function edit($id)
    {
        $monthList = DB::table('months')->pluck('name', 'id');
        $yearList = DB::table('years')->pluck('year', 'id');
        $salary = Salary::find($id);

        return view('salary.edit', compact('salary', 'monthList', 'yearList'));
    }

    public function update(SalaryRequest $request, $id)
    {
        $salary = Salary::find($id);
        $authId = Auth::id();
        $employee = Employee::find($request->employee_id);
        if (!count($employee)) {
            flash()->error(' Successfully Created');
            return redirect()->back();
        } else {
            $salary->update([
                               'employee_id' => $request->employee_id,
                               'year_id' => $request->year_id,
                               'month_id' => $request->month_id,
                               'days_of_month' => $request->days_of_month,
                               'days_of_attendance' => $request->days_of_attendance,
                               'salary_earn' => ($employee->salary / $request->days_of_month) * $request->days_of_attendance,
                               'hours_of_overtime' => $request->hours_of_overtime,
                               'overtime_earn' => $request->hours_of_overtime * (($employee->basic_salary / 208) * 2),
                               'gross_salary' => (($employee->salary / $request->days_of_month) * $request->days_of_attendance) + ($request->hours_of_overtime * ($employee->basic_salary / 208) * 2),
                               'created_by' => $authId,
                               'updated_by' => $authId
                           ]);

            flash()->message('Salary of '.$employee->name.' is Successfully Created');

            return redirect('salary');
        }
    }

    public function employeeInfoShow(Request $request)
    {
        $employee = Employee::find($request->employee_id);
        if(!$employee) {
            return '<strong style="color: red; margin-left: 292px;">Entered Wrong ID of Employee.</strong>';
        }
        return view('salary.employee_info_show', compact('employee'));
    }
}
