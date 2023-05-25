<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $students = Student::paginate(10);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'status' => 'required',
        ]);
        
        //Student::create($request->post());
        Student::create([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ]);

        return redirect()->route('students.index')->with('success','Student Added Successfully.');
    }

   
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'status' => 'required',
        ]);
        
        //$student->fill($request->post())->save();

        $student->fill([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ])->save();

        return redirect()->route('students.index')->with('success','Student updated successfully');
    }

   
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success','Deleted Successfully');
    }
}
