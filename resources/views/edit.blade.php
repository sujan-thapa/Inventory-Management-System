@extends('layouts.layout')

@section('content')
    @parent
    <div class="container">
        <div class="row">
                <form action="{{route('product.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">

                    <div class="form-group">

                        <label for="name">Product Name</label>
                        <input type="text" name="name" class="form-control" id="productName" placeholder="Product Name" value="{{$product->name}}">

                    </div>
                    <div class="form-group">
                            <label for="image">Product Photo</label>
                            <input type="file" name="image" class="form-control" id="productImage" placeholder="Product Image">
                    </div>
                    <div class="form-group">
                            {{-- <label for="description">Product Description</label> --}}
                            {{-- <input type="text" name="description" class="form-control" id="productDescription" placeholder="Product Description"> --}}
                        <textarea name="description" id="" cols="70" rows="5" placeholder="Product Description"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="name">Product Colour</label>
                        <input type="text" name="color" class="form-control" id="productColor" placeholder="Product Colour">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity</label>
                        <input type="text" name="quantity" class="form-control" id="productQuantity" placeholder="Product Quantity">
                    </div>
                    <div class="form-group">
                         <label for="name">Product Price</label>
                        <input type="text" name="price" class="form-control" id="productPrice" placeholder="Product Price">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection


