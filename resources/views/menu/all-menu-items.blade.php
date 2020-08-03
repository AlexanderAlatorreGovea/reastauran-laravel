@extends('layouts.app')
@section('title')
Food Items - {{$settings["general"]->site_title}} 
@endsection
 
@section('title', 'Products')
  
@section('content')
    <div class="order-now" style="width: 100vw; height: 100%; background: white;">
        <h1 style="text-transform: uppercase; font-family: Courgette; font-size: 50px; line-height: 1.2; color: #d61c22; padding-top: 5rem; text-align: center;">Order Now</h1>
        <div class="container products" style="background: white; padding-top: 2rem;">
            <div class="row">
                @foreach($foodItems as $foodItem)
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img style="object-fit: contain;" src="{{ $foodItem->image_url }}" width="500" height="300">
                            <div class="caption">
                                <h4>{{ $foodItem->title }}</h4>
                                <p>{{ str_limit(strtolower($foodItem->description), 50) }}</p>
                                <p><strong>Price: </strong> {{ $foodItem->price }}$</p>
                                <p class="btn-holder"><a href="{{ url('add-to-cart/'.$foodItem->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                            </div>
                        </div>
                    </div>
                @endforeach
    
            </div><!-- End row -->
    
        </div>
    </div>
@endsection