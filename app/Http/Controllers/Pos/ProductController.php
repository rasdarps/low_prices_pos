<?php

namespace App\Http\Controllers\Pos;

use App\Models\Unit;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
  
class ProductController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','store']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function ProductAll(){

        $product = Product::latest()->get();
        return view('backend.product.product_all',compact('product'));

    } // End Method 


    public function ProductAdd(){
        $category = Category::all();
        $unit = Unit::all();
        return view('backend.product.product_add',compact('category','unit'));
    } // End Method 


    public function ProductStore(Request $request){

        $request->validate([
            'name' => ['required', Rule::unique('products', 'name')],
            'stock_level'=> 'nullable'
           
        ]);

        Product::insert([

            'name' => $request->name,
            'unit_id' => $request->unit_id,
            'category_id' => $request->category_id,
            'quantity' => '0',
            'stock_level' => $request->stock_level,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Product Inserted Successfully', 
            'stock_level' => 'success'
        );

        return redirect()->route('product.all')->with($notification); 

    } // End Method 



    public function ProductEdit($id){
        $category = Category::all();
        $unit = Unit::all();
        $product = Product::findOrFail($id);
        return view('backend.product.product_edit',compact('product','category','unit'));
    } // End Method 



    public function ProductUpdate(Request $request){

        $request->validate([
            'name' => ['required'],
            'alert_stock'=> 'nullable'

        ]);

        $product_id = $request->id;

         Product::findOrFail($product_id)->update([

            'name' => $request->name,
            'unit_id' => $request->unit_id,
            'category_id' => $request->category_id, 
            'stock_level' => $request->stock_level, 
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Product Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('product.all')->with($notification); 


    } // End Method 


    public function ProductDelete($id){
       
       Product::findOrFail($id)->delete();
            $notification = array(
            'message' => 'Product Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    } // End Method 


//     public function checkQuantity(Request $request)
// {
//     $sellingQty = $request->input('selling_qty');
//     $productId = $request->productId;
//     // Query the database for the product quantity
//     $productQty = DB::table('products')->where('id', $productId)->value('quantity');

//     // Compare the product quantity to the selling quantity
//     if ($productQty < $sellingQty) {
//         $response = [
//             'status' => 'error',
//             'message' => 'Insufficient stock quantity',
//         ];
//     } else {
//         $response = [
//             'status' => 'success',
//             'message' => 'Quantity available',
//         ];
//     }

//     // Return the response as JSON
//     return response()->json($response);
// }




}
 