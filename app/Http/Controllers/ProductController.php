<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    public function store(Request $request)
    {


        // checking database connection
        /*if (DB::connection()->getDatabaseName()) {
            echo "Connected sucessfully to database " . DB::connection()->getDatabaseName() . ".";
        }*/

        //form validation


        //image validation
        if ($request->hasFile('image')) { //image xa i xaina herxa

            $data = new Product();

            // file move
            $file = $request->file('image');
            $filename  = Str::uuid() . '_image.' . $file->getClientOriginalExtension();
            $file->move('images/products', $filename);

            $data->name = $request['name'];
            $data->image =  $filename;
            $data->description = $request['description'];
            $data->color = $request['color'];
            $data->quantity = $request['quantity'];
            $data->price = $request['price'];
            $data->save();

            return redirect('/dashboard');
        }
        return redirect('/');


        /* Product::create([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'color' => $request->color,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);
        // return redirect('/Dashboard');
        return 'sujanvg'; */
    }

    public function show()
    {
        // $product = Product::select('name','image','description','quantity','price')->get();
        // $products = Product::orderBy('created_at', 'desc')->get();
        $products = Product::orderBy('id')->get();
        return view('dashboard', compact('products'));
    }

    public function getProductById($id){
        $product = Product::where('id',$id)->first();
        return view('product',compact('product'));

    }

    public function edit($id){
        // return view('edit',compact($prod));
        // return $prod->$id();


        // By using eloquent, return selected editable item
        /*$flig = Product::where('id',$id)->first();
        return $flig;*/

        // $productss = Product::where('id', $id);
        // return view('edit', compact('productss'));
        // return redirect('edit',compact('productss'));

        $product = Product::find($id);
        // if(){

        // }
        return view('edit',compact('product'));



    }

    // Function for updating data
    public function update(Request $request, Product $prod){

        return $request;
        // form validation
        $request->validate([
            'name' => 'required',
            // 'image' => 'required',
            'description' => 'required',
            'color' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        // Image validation
        // no idea

        // $prod->update($request->all());

        // return redirect('/dashboard');
        // return 'sujan vg';

        // update statements
        // $affected = DB::table('product')->where('name',$request->name)->update([
        //     'name' => $request['name'],
        //     'image' => $request['image'],
        //     'description' => $request['description'],
        //     'color' => $request['name'],
        //     'quantity' => $request['quantity'],
        //     'price' => $request['price']
        // ]);
        // // Product::

        // return $request->name;


        // DB::update('update product set name = ?,image=?,description=?,color=?,quantity=?,price=? where id = ?', [$request['name'],
        //     $request['image'],
        //     $request['description'],
        //     $request['name'],
        //     $request['quantity'],
        //     $request['price']
        // );
        // echo "Record updated successfully.";



        $product = Product::find($request->id);
        $product->name = $request->name;


        if ($request->hasFile('image')) { //image xa i xaina herxa

            File::delete('/images/products/'.$product->image);
            // file move
            $file = $request->file('image');
            $filename  = Str::uuid() . '_image.' . $file->getClientOriginalExtension();
            $file->move('images/products', $filename);

            $product->image =  $filename;
        }

        $product->description = $request->description;
        $product->color = $request->color;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();

        return redirect('dashboard');

    }

    // Function to delete data with the help of button
    public function delete($id){
        // DB::delete('delete users where name = ?', [$id])
        // Product::delete()
        DB::delete('delete from product where id = ?', [$id]);
        // echo "Record deleted successfully.<br/>";
        // echo '<a href = "/delete-records">Click Here</a> to go back.';
        return redirect('/dashboard');
    }
}
