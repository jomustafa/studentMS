<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Semester;
use App\Models\Student;
use Validator;

class SemestersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if($request != ""){
        //     $search = $request::get('search');
        // $semesters = DB::table('semesters')->where('semesterPeriod', 'LIKE', '%' .$search. '%');
        // }
        // else{
        //     $semesters = Semester::orderBy('id', 'DESC')->get();
        // }
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
        $semesters = DB::table('semesters')->where('semesterPeriod', 'LIKE', '%' .$search. '%');

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
            'semesterPeriod' => 'required|in:fall, Fall, Spring, spring',
            'year' => 'required|regex:/(2)[0-9,-]{8}/',
            'academicLevel' => 'required|regex:/[1-3]{1}/'
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
       
        // //mi kqyr studentat e qati semestri specifik
        $semesters = Semester::find($id);
        return view('semesters.show')->with('semesters', $semesters);
    }

    public function showUnits($id){
        $semesters = Semester::find($id);
        return view('semesters.showUnits')->with('semesters',$semesters);

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
        //n edit qitu duhet me ndreq validimin
        $request->validate([
            'semesterPeriod' => 'required_without_all:year,academicLevel|in:fall, Fall, Spring, spring',
            'year' => 'required_without_all:semesterPeriod,academicLevel|regex:/(2)[0-9,-]{8}/',
            'academicLevel' => 'required_without_all:semesterPeriod,year|regex:/[1-3]{1}/'
        ]);

        
        $data['semesterPeriod'] = $request['semesterPeriod'];
        $data['year'] = $request['year'];
        $data['academicLevel'] = $request['academicLevel'];

        $semester = Semester::find($id);

        if( $semester::where('id',$id)->update($data))
        return redirect()->route('semester.index')->with('success', 
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
        return redirect()->route('semester.index')->with('success', 
        'Semester was deleted successfully');
        else
        return redirect()->back()->with('error', 
        'Something went wrong while deleting!');
    }
}
