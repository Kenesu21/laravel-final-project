<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
public function index(){
    //orderBy to display
    $employees = Employee:: orderBy('id','desc')->paginate(5);
    return view('employees.index',compact('employees'));
}
public function create(){
    return view('employees.create');
}
public function store(Request $request){
    $request->validate([
        'fullname'=>'required',
    'email_address'=>'required',
    'username'=>'required',
    'password'=>'required',
    'status'=>'required'
]);
    Employee::create($request->post());
    return redirect()->route('employees.index')->with('success','Employee is added');

}
public function show(Employee $employee){
    return view('employees.show', compact('employee'));
}
public function edit(Employee $employee){
    return view ('employees.edit',compact ('employee'));
}
public function update(Request $request, Employee $employee){
    $request->validate([
        'fullname'=>'required',
        'email_address'=>'required',
        'username'=>'required',
        'password'=>'required',
        'status'=>'required',

    ]);
$employee->fill($request->post())->save();
return redirect()->route('employees.index')->with('success','Employee has been updated');
}
public function destroy(Employee $employee){
    $employee->delete();
    return redirect()->route('employees.index')->with('success','Employee deleted!');
}

}
