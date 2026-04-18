<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index():View
{
 // Retrieve all student records from the database
 $students = Student::all();
 // Pass the data to the view using the compact() helper
return view('students.index', compact('students'));
}
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
         $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'phone_number' => 'required|digits:10'
    ]);
        Student::create([
            'regno'=>$request->reg_no,
            'email'=>$request->email,
            'location'=>$request->location,
            'name'=>$request->full_name,
            'phone_number'=>$request->phone
        ]);
         return redirect('/students')->with('success', 'Student added successfully');


    }
    public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));
}
public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);
     $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . $id,
        'phone' => 'required|digits:8'
    ]);

    $student->name = $request->full_name;
    $student->email = $request->email;
    $student->regno = $request->reg_no;
    $student->location = $request->location;
    $student->phone_number = $request->phone;

    $student->save();

    return redirect('/students')->with('success', 'Student updated successfully');
}
public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();

    return redirect('/students')->with('success', 'Student deleted');
}

}
