<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function home()
    {
         $student = Student::all();//select from student

        return view('/home', ['studentlist'=>$student]);
        // return view('/home');
    }
    public function index ()
    {
        $student = Student::all();//select from student

        return view('student', ['studentlist'=>$student]);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('student-detail', ['student' =>$student]);
    }
    public function create()
    {

        return view('student-add');
    }

    public function store(Request $request)
    {   
        $newName = '';

        if($request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name.'.'.now()->timestamp.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }
        $request['image'] = $newName;
        //mass assigment harus sama dengan nama table
        $student=Student::create($request->all());

        if($student){
            Session::flash('status','success');
            Session::flash('massage', 'Add New Student Success!!');
        };

        return redirect('/student');
    }

    public function edit(Request $request, $id)
    {
        $student= Student::findOrFail($id);
        return view('student-edit', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->save();

        //mass assiggment update
        $student->update($request->all());
        return redirect('/student');
    }
    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }

    public function destroy($id)
    {
        $deleteStudent = Student::findOrFail($id);
        $deleteStudent->delete();

        if($deleteStudent){
            Session::flash('status','success');
            Session::flash('massage', 'Delete Data Student Success!!');
        };

        return redirect('/student');
    }
}
