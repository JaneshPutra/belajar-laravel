<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function home()
    {
        //  $student = Student::all();//select from student

        // return view('/home', ['studentlist'=>$student]);
        return view('/home');
    }
    public function index()
    {
        $filter = student::latest();

        if(request('search')){
            $filter->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('nis', 'like', '%' . request('search') . '%')
            ->orWhere('asal', 'like', '%' . request('search') . '%');
        }
        // $student = Student::all();
        return view('student', ["studentlist" =>$filter->paginate(8)->withQueryString()]);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }
    public function create()
    {

        return view('student-add');
    }

    public function store(Request $request)
    {
        $newName = '';
        $validate = $request->validate([
            'name' => 'required',
            'nis' => 'required|max:10',
            'asal' => 'required',
            'no_hp' => 'required|max:10'
        ]);

        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name . '.' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('photo', $newName);
        }
        $request['image'] = $newName;
        //mass assigment harus sama dengan nama table
        $student = Student::create($request->all());

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('massage', 'Add New Student Success!!');
        }
        ;

        return redirect('/student');
    }

    public function edit(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        return view('student-edit', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $validate = $request->validate([
            'name' => 'required',
            'nis' => 'required|max:10',
            'gender' => 'required',
            'asal' => 'required',
            'no_hp' => 'required|max:10'
        ]);
        //mass assiggment update
        // $student->update($request->all());
        if ($request->file('image')->isValid()) {
            $oldImage = $student->image;

            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '.' . $ext;
            $upload = $request->image->move(public_path() . '/storage/photo', $newFileName);

            // $student->image = $nsewFileName;
            // $student->save();

            if ($upload) {
                $delete = File::delete(public_path() . '/storage/photo/' . $oldImage);
                $student->update($request->except('image') + ['image' => $newFileName]);
            }
        }

        return redirect('/student')->with('flash_message', 'student Updated!');
    }
    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }

    public function destroy($id)
    {
        $student = student::find($id);
        $oldImage = $student->image;
        $delete = File::delete(public_path() . '/storage/photo/' . $oldImage);
        if ($delete) {
            student::destroy($id);
        }

        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
