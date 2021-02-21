<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('products'));
    }
}
