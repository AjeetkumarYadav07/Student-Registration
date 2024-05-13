<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// --User Model Name ---//
use App\Models\Student;

class studentController extends Controller
{
    


    
    //  -----How create a student table ---///


    public function create()
    {

    //  ----Name of views form ---//

        return view('studentForm');
    }
  
 


    // ---- Make sure database fileds and name will same --//

    public function store(Request $request)
    {
    // Form validation
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required ',
        'class'=>'required',
       
     ]);


        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->address = $request->input('address');
        $student->class = $request->input('class');
        $student->save();
        // return redirect()->back()->with('status','Student Added Successfully');
        return redirect()->route('index')->with('status','Student Added Successfully');
    }







  
    // -------Edit student form and view after register ----//



    public function index()
    {
        $student = Student::all();
        return view('index', compact('student'));
    }


    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit', compact('student'));
    }


    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->address = $request->input('address');
        $student->class = $request->input('class');
        $student->update();
        // return redirect()->back()->with('status','Student Updated Successfully');
        return redirect()->route('index')->with('status','Student Updated Successfully');
    }




    

    // -----For Delete Data ----//

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }
  




    //    ------Admin panel ---//

    public function admin(){
        return view('admin.admin');
     }
  


}



