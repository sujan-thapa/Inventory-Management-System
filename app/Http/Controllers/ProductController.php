<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function store(Request $request){


        // checking database connection
        /*if (DB::connection()->getDatabaseName()) {
            echo "Connected sucessfully to database " . DB::connection()->getDatabaseName() . ".";
        }*/

        $data = new Product();
        $data->name = $request['name'];
        $data->image = $request['image'];
        $data->description = $request['description'];
        $data->color = $request['color'];
        $data->quantity = $request['quantity'];
        $data->price = $request['price'];
        $data->save();

        return redirect('/dashboard');

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

    public function show(){

    }

}
