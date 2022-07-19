<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Semester;
use Validator;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $search = $request->get('search');
        $students = DB::table('students')->where('name', 'LIKE', '%' .$search. '%')->orWhere('yearOfStudies', 'LIKE', '%' .$search. '%')
        ->orWhere('levelOfStudies', 'LIKE', '%' .$search. '%')->get();
       
        if(count($students) > 0)
      
        return view('students.index')->with('students', $students);
        
        else
            $students = Student::orderBy('id', 'DESC')->get();
            return view('students.index')->with('students', $students);

        // $students = Student::orderBy('lastName', 'DESC')->get();
        // return view('students.index')->with('students', $students);
    }

    public function show($id){
       // to see assigned semesters
       
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //    $semester = Semester::find($id);
        $semesters = Semester::orderBy('id', 'DESC')->get();
        return view('students.create')->with('semesters', $semesters);
        // ->with('semester', $semester);

        
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha',
            'lastName' => 'required|alpha',
            'age' => 'required|regex:/[0-9]{2}/',
            'gender' => 'required',
            'levelOfStudies' => 'required',
            'yearOfStudies' => 'required',
            'semester_id' => 'required',
            'scholarship' => 'required',
            'part_timeStudent' => 'required'
        ]);

        
        $data['name'] = $request['name'];
        $data['lastName'] = $request['lastName'];
        $data['age'] = $request['age'];
        $data['gender'] = $request['gender'];
        $data['levelOfStudies'] = $request['levelOfStudies'];
        $data['yearOfStudies'] = $request['yearOfStudies'];
        $data['semester_id'] = $request['semester_id'];
        $data['scholarship'] = $request['scholarship'];
        $data['part_timeStudent'] = $request['part_timeStudent'];
  

        if( Student::create($data) )
        return redirect()->route('students.index')->with('success', 
        'Student was created successfully');
        else
        return redirect()->back()->with('error', 
        'Something went wrong while creating Student!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semesters = Semester::orderBy('id', 'DESC')->get();
        $student = Student::find($id);
        return view('students.edit', compact (['semesters','student']));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'lastName' => 'required',
        //     'age' => 'required',
        //     'semester_id' => 'required'
        // ]);

        $data['name'] = $request['name'];
        $data['lastName'] = $request['lastName'];
        $data['age'] = $request['age'];
        $data['semester_id'] = $request['semester_id'];

        $student = Student::find($id);
    
        if(DB::table('students')->where('id',$id)->update($data))
        return redirect()->route('students.index')->with('success', 
        'Student was updated successfully');
        else
        return redirect()->back()->with('error', 
        'Something went wrong while updating!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        
        if($student->delete())
        return redirect()->route('students.index')->with('success', 
        'Student was deleted successfully');
        else
        return redirect()->back()->with('error', 
        'Something went wrong while deleting!');
    }
}
