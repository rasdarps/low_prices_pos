<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:customer-list|customer-create|customer-edit|customer-delete', ['only' => ['index','show']]);
         $this->middleware('permission:customer-create', ['only' => ['create','store']]);
         $this->middleware('permission:customer-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:customer-delete', ['only' => ['destroy']]);
    }
   
       //use this if you want to create search queries put {{ $q }} in input value
    /* public function index(Request $request)
    {
        //
        $data['title'] = 'Customers List';
        $data['q'] = $request->get('q');
        $data['customers'] = Customer::where('customer_name', 'like', '%' . $data['q'] . '%')->get();
        return view('customer.index', $data);
    }*/

     //Select all Records from a table
     public function index()
     {
      
         return view('customer.index',[
            'customers' => Customer::all()
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
        $data['title'] = 'Add Customer';
        return view('customer.create', $data);
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
            'customer_name' => ['required'],
            'contact' => ['required' , Rule::unique('tb_supplier', 'contact')],
            'address' => ['required'],

        ]);

        $customer = new Customer($request->all());
        $customer->save();
        //after saving a new customer it returns to index page to view list
        return redirect('customer')->with('success', 'Customer Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
        $data['title'] = 'Edit Customer';
        $data['customer'] = $customer;
        return view('customer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $request->validate([
            'customer_name' => 'required',
            'contact' => 'required',
            'address' => 'required',

        ]);

        $customer -> customer_name = $request -> customer_name;
        $customer -> contact = $request -> contact;
        $customer -> address = $request -> address;
        $customer->save();
        //after saving a new customer it returns to index page to view list
        return redirect('customer')->with('success', 'Customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
        
        return redirect('customer')->with('success', 'Customer deleted Successfully');
    }
}
