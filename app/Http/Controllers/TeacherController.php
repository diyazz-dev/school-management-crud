<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeacherController extends Controller
{
    public function index():View{

        $teachers = Teacher::all();
        return view('teachers.index',compact('teachers'));
    }

     public function create(){
        return view('teachers.create');
    }


    public function store(Request $request){
         $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:teachers,email',
        'phone_number' => 'required|digits:8'
    ]);
        Teacher::create([
            'subject'=>$request->subject,
            'email'=>$request->email,
            'location'=>$request->location,
            'name'=>$request->name,
            'phone_number'=>$request->phone_number
        ]);
         return redirect('/teachers')->with('success', 'Teacher added successfully');


    }

     public function edit($id)
{
    $teacher = Teacher::findOrFail($id);
    return view('teachers.edit', compact('teacher'));
}
public function update(Request $request, $id)
{
    $teacher = Teacher::findOrFail($id);
     $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:teachers,email,' . $id,
        'phone_number' => 'required|digits:8'
    ]);

    $teacher->name = $request->name;
    $teacher->email = $request->email;
    $teacher->subject = $request->subject;
    $teacher->location = $request->location;
    $teacher->phone_number = $request->phone_number;

    $teacher->save();

    return redirect('/teachers')->with('success', 'Teacher updated successfully');
}
public function destroy($id)
{
    $teacher = Teacher::findOrFail($id);
    $teacher->delete();

    return redirect('/teachers')->with('success', 'Teacher deleted');
}


}
