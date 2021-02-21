@extends('layouts.layout')

@section('title','Dashboard')

{{-- @stop --}}


@section('navbar')

{{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam maxime, quas dicta quibusdam corporis quia animi assumenda quam labore odit velit, soluta, nostrum omnis perferendis sequi et distinctio dolorem cum adipisci nihil quidem vitae. Consequuntur repellat architecto eum eius necessitatibus magni laborum magnam fugiat explicabo dolore, debitis ex. Quaerat repellat autem omnis totam nam, reprehenderit rerum ratione blanditiis accusamus, amet illum a saepe nobis eveniet quibusdam aliquam hic facilis error debitis animi quisquam illo enim? Rem quam voluptatum et itaque perferendis dicta iste nostrum quae, atque deserunt nulla voluptas magnam aliquid, aspernatur in at est saepe vel odio libero provident?</p> --}}
{{-- @endsection --}}
{{-- @endsection --}}
    @parent
    <div class="row">

        <div class="my-3 container">
            <h3>Add Product</h3>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/dashboard" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" class="form-control" id="productName" placeholder="Product Name">
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
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
                </div>
            </div>
            </div>
        </div>
    </div>



    {{-- for displaying product --}}
    <div class="row">
        @foreach ($products as $item)
        <div class="col-12 col-md-2 mx-5 my-3 ">
               <div class="card card-body">
                   <img class="card-img-top img-fluid" src="{{asset('/images/products/'.$item['image'])}}" alt="Card image cap">
                   <h5 class="card-title">{{$item['name']}}</h5>
                   <p class="card-text">{{$item['description']}}</p>
                   <a href="/product" class="btn btn-primary">View</a>
                    {{-- {{$item['description']}} --}}
               </div>
            </div>
            @endforeach
    </div>
@stop

