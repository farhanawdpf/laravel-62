<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StudentModel;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function show ()
    {
        $sts = StudentModel::all();
        //  dd($sts->toArray());
        return view('home',compact('sts'));
    }
    // public function destroy(Request $request)
    // {
    //     $student = StudentModel::find($request->id);
    //     $student->delete();
    //     return Redirect::to('/');
    // }

    public function destroy($id)
    {
      $sts = StudentModel::find($id);
      $sts->delete();
      return Redirect::to('/');

    }

    //create page name
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new StudentModel;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->save();
        return Redirect::to('/');
    }

        //student page
    public function update($student_id)
    {
        $student = StudentModel::find($student_id);
        return view('edit',compact('student'));
    }

    public function editStore(Request $request)
    {
       $student = StudentModel::find($request->student_id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->save();
        return Redirect::to('/');
    }
}
