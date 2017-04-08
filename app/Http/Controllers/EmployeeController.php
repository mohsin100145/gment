<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use File;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function index()
    {
        $employees = Employee::get();

        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeRequest $request)
    {
        $authId = Auth::id();
        if ($request->image == '') {
            $employee = Employee::create([
                                             'name' => $request->name,
                                             'joining_date' => $request->joining_date,
                                             'salary' => $request->salary,
                                             'basic_salary' => $request->basic_salary,
                                             'home_allowance' => $request->home_allowance,
                                             'food_allowance' => $request->food_allowance,
                                             'medical_allowance' => $request->medical_allowance,
                                             'conveyance_allowance' => $request->conveyance_allowance,
                                             'salary_increment' => $request->salary_increment,
                                             'mobile_no' => $request->mobile_no,
                                             'address' => $request->address,
                                             'image' => $request->image,
                                             'created_by' => $authId,
                                             'updated_by' => $authId
                                         ]);
        } else {
            if (Input::file('image')->isValid()) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
            } else {
                flash()->error('uploaded file is not valid');

                return redirect()->back();
            }
                //return $request->all();
            $employee = Employee::create([
                                            'name' => $request->name,
                                            'joining_date' => $request->joining_date,
                                            'salary' => $request->salary,
                                            'basic_salary' => $request->basic_salary,
                                            'home_allowance' => $request->home_allowance,
                                            'food_allowance' => $request->food_allowance,
                                            'medical_allowance' => $request->medical_allowance,
                                            'conveyance_allowance' => $request->conveyance_allowance,
                                            'salary_increment' => $request->salary_increment,
                                            'mobile_no' => $request->mobile_no,
                                            'address' => $request->address,
                                            'image' => $fileName,
                                            'created_by' => $authId,
                                            'updated_by' => $authId
                                         ]);
        }
        flash()->message($employee->name . ' Successfully Created');

        return redirect('employee');
    }

    public function show($id)
    {
        $employee = Employee::find($id);

        return view('employee.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);

        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $authId = Auth::id();
        $employee = Employee::find($id);

        File::delete('uploads/' . $employee->image);
        if ($request->image == '') {
            $employee->update([
                                 'name' => $request->name,
                                 'joining_date' => $request->joining_date,
                                 'salary' => $request->salary,
                                 'basic_salary' => $request->basic_salary,
                                 'home_allowance' => $request->home_allowance,
                                 'food_allowance' => $request->food_allowance,
                                 'medical_allowance' => $request->medical_allowance,
                                 'conveyance_allowance' => $request->conveyance_allowance,
                                 'salary_increment' => $request->salary_increment,
                                 'mobile_no' => $request->mobile_no,
                                 'address' => $request->address,
                                 'image' => $request->image,
                                 'created_by' => $authId,
                                 'updated_by' => $authId
                             ]);
        } else {
            if (Input::file('image')->isValid()) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
            } else {
                flash()->error('uploaded file is not valid');

                return redirect()->back();
            }
            //return $request->all();
            $employee->update([
                                 'name' => $request->name,
                                 'joining_date' => $request->joining_date,
                                 'salary' => $request->salary,
                                 'basic_salary' => $request->basic_salary,
                                 'home_allowance' => $request->home_allowance,
                                 'food_allowance' => $request->food_allowance,
                                 'medical_allowance' => $request->medical_allowance,
                                 'conveyance_allowance' => $request->conveyance_allowance,
                                 'salary_increment' => $request->salary_increment,
                                 'mobile_no' => $request->mobile_no,
                                 'address' => $request->address,
                                 'image' => $fileName,
                                 'created_by' => $authId,
                                 'updated_by' => $authId
                             ]);
        }

        flash()->message($employee->name . ' Successfully Updated.');

        return redirect('employee');
    }
}
