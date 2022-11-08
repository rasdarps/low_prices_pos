<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:unit-list|unit-create|unit-edit|unit-delete', ['only' => ['index','store']]);
         $this->middleware('permission:unit-create', ['only' => ['create','store']]);
         $this->middleware('permission:unit-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:unit-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('units.index' ,[
            'units' => Unit::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'unit' => 'required',
            
        ]);
    
        Unit::create($request->all());
    
        return redirect()->route('units.index')
                        ->with('success','Unit created successfully.');
    
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
    public function edit(Unit $unit)
    {
        //
        $data['unit'] = $unit;
        return view('units.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        //
        request()->validate([
            'unit' => 'required',
            
        ]);
    
        $unit->update($request->all());
    
        return redirect()->route('units.index')
                        ->with('success','Unit updated successfully');
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
