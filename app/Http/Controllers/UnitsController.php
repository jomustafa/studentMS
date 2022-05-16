<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Semester;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::orderBy('id', 'DESC')->get();
        return view('units.index')->with('units', $units);

    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semester::orderBy('id', 'DESC')->get();
        return view('units.create')->with('semesters', $semesters);
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
            'credits' => 'required|regex:/[0-9]{2}/',
            'unitCode' => 'required'
        ]);

        $data['name'] = $request['name'];
        $data['credits'] = $request['credits'];
        $data['unitCode'] = $request['unitCode'];

        if(Unit::create($data))
        return redirect()->route('units.index')->with('success', 'Unit was created successfully');
        else
        return redirect()->back()->with('error', 'Something went wrong while creating Units!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
