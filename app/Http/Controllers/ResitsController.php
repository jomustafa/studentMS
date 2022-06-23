<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resit;
use App\Models\Unit;

class ResitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resits = Resit::orderBy('id', 'DESC')->get();
        return view('resits.index')->with('resits', $resits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::orderBy('id', 'DESC')->get();
        return view('resits.create')->with('units', $units);
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
            'unit_id' => 'required'
        ]);

        $data['unit_id'] = $request['unit_id'];

        if(Resit::create($data))
        return redirect()->route('resits.index')->with('success', 'Resit was created successfully');
        else
        return redirect()->back()->with('error', 'Something went wrong while creating Resit!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $resit = Resit::find($id);
        
        if($resit->delete())
        return redirect()->route('resits.index')->with('success', 
        'Resit was deleted successfully');
        else
        return redirect()->back()->with('error', 
        'Something went wrong while deleting!');
    }
}
