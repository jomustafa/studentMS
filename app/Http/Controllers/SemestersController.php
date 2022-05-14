<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Semester;
use App\Models\Student;

class SemestersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $semesters = DB::table('semesters')->paginate(10);
        // return view('semesters.index')->with('semesters', $semesters);

        $semesters = Semester::orderBy('id', 'DESC')->get();
        return view('semesters.index')->with('semesters', $semesters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semesters.create');

    }

    public function search(Request $request){

        $search = $request->get('search');
        $semesters = DB::table('semesters')->where('semesterPeriod', 'LIKE', '%' .$search. '%')-paginate(5);

        if(count($semesters) > 0)
        return view('semesters.index', ['semesters' => $semesters]);
        else
        return view('semesters.index')->with('status', 
        'No results!');
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
            'semesterPeriod' => 'required',
            'year' => 'required',
            'academicLevel' => 'required'
        ]);

        $data['semesterPeriod'] = $request['semesterPeriod'];
        $data['year'] = $request['year'];
        $data['academicLevel'] = $request['academicLevel'];

        if( Semester::create($data))
        return redirect()->route('semester.index')->with('success', 
        'Semester was created successfully');
        else
        return redirect()->back()->with('error', 
        'Something went wrong while creating Semester!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // // $semester = Semester::find($id);
        // // $searchInput = Input::get('searchInput');
        // // info($searchInput);
        // // return view('semesters/show');
        // // ->with('semester',$semester);

        // //mi kqyr studentat e qati semestri
        $semester = Semester::find($id);
        $students = $semester->students;

        return view('semesters.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semester = Semester::find($id);
        return view('semesters.edit')->with('semester',$semester);
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
        $request->validate([
            'semesterPeriod' => 'required',
            'year' => 'required',
            'academicLevel' => 'required'
        ]);

        
        $data['semesterPeriod'] = $request['semesterPeriod'];
        $data['year'] = $request['year'];
        $data['academicLevel'] = $request['academicLevel'];

        $semester = Semester::find($id);

        if( $semester::update($data))
        return redirect()->route('semesters.index')->with('success', 
        'Semester was updated successfully');
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
        $semester = Semester::find($id);
        
        if($semester->delete())
        return redirect()->route('semesters.index')->with('success', 
        'Semester was deleted successfully');
        else
        return redirect()->back()->with('error', 
        'Something went wrong while deleting!');
    }
}
