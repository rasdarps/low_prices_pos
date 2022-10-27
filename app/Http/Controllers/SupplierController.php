<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;


class SupplierController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:supplier-list|supplier-create|supplier-edit|supplier-delete', ['only' => ['index','store']]);
         $this->middleware('permission:supplier-create', ['only' => ['create','store']]);
         $this->middleware('permission:supplier-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:supplier-delete', ['only' => ['destroy']]);
    }

    //use this if you want to create search queries put {{ $q }} in input value
    /*public function index(Request $request)
    {
        //
        /*$data['title'] = 'Suppliers List';
        $data['q'] = $request->get('q');
        $data['suppliers'] = Supplier::where('supplier_name', 'like', '%' . $data['q'] . '%')->get();
        return view('supplier.index', $data);

    }*/

    //Select all Records from a table
    public function index()
    {
       
        return view('supplier.index' ,[
            'suppliers' => Supplier::all()
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
        $data['title'] = 'Add Supplier';
        return view('supplier.create', $data);
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
        $request->validate([
            'supplier_name' => ['required'],
            'contact_name' => ['required'],

        ]);

        $supplier = new Supplier($request->all());
        $supplier->save();
        //after saving a new customer it returns to index page to view list
        return redirect('supplier')->with('success', 'Supplier Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
        $data['title'] = 'Edit Supplier';
        $data['supplier'] = $supplier;
        return view('supplier.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
        $request->validate([
            'supplier_name' => 'required',
            'contact_name' => 'required',

        ]);

        $supplier -> supplier_name = $request -> supplier_name;
        $supplier -> contact_name = $request -> contact_name;
        $supplier -> address = $request -> address;
        $supplier -> city = $request -> city;
        $supplier->save();
        //after saving a new customer it returns to index page to view list
        return redirect('supplier')->with('success', 'Supplier Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
        $supplier->delete();
        
        return redirect('supplier')->with('success', 'Supplier deleted Successfully');
    }
}
