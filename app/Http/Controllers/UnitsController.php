<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Semester;
use App\Models\Unit;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $units = DB::table('units')->where('name', 'LIKE', '%' .$search. '%')
        ->orWhere('unitCode', 'LIKE', '%' .$search. '%')->orWhere('lecturer', 'LIKE', '%' .$search. '%')->get();
       
        if(count($units) > 0)
      
        return view('units.index')->with('units', $units);
        
        else
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

    public function show($id){
        
        $units = Unit::find($id);
        return view('units.show')->with('units', $units);
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
            'name' => 'required',
            'credits' => 'required|regex:/[0-9]{2}/',
            'unitCode' => 'required',
            'semester_id' => 'required',
            'lecturer' => 'required|alpha'
        ]);

        $data['name'] = $request['name'];
        $data['credits'] = $request['credits'];
        $data['unitCode'] = $request['unitCode'];
        $data['semester_id'] = $request['semester_id'];
        $data['lecturer'] = $request['lecturer'];

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::find($id);
        return view('units.edit')->with('unit', $unit);
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
            'name' => 'required|alpha',
            'unitCode' => 'required',
            'credits' => 'required|regex:/[0-9]{2}/',
            'lecturer' => 'required|alpha'
        ]);

        $data['name'] = $request['name'];
        $data['unitCode'] = $request['unitCode'];
        $data['credits'] = $request['credits'];
        $data['lecturer'] = $request['lecturer'];

        $unit = Unit::find($id);

        if( $unit::update($data))
        return redirect()->route('unit.index')->with('success', 
        'Unit was updated successfully');
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
        $unit = Unit::find($id);
        
        if($unit->delete())
        return redirect()->route('units.index')->with('success', 
        'Unit was deleted successfully');
        else
        return redirect()->back()->with('error', 
        'Something went wrong while deleting!');
    }
}
