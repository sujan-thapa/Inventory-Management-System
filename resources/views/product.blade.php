@extends('layouts.layout')

@section('navbar')
    @parent
    <div class=" mx-6 my-3 container">
        <div class="col-12 col-md-2 mx-5 my-3 ">
               <div class="card card-body">
                   <img class="card-img-top img-fluid" src="{{asset('/images/products/'.$product['image'])}}" alt="Card image cap">
                   <h5 class="card-title">{{$product['name']}}</h5>
                   <p class="card-text">{{$product['description']}}</p>
                     {{-- {{$product['description']}} --}}
               </div>
            </div>
    </div>

@endsection

