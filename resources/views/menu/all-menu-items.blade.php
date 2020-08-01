@extends('layouts.app')
@section('title')
Food Items - {{$settings["general"]->site_title}} 
@endsection
 
@section('title', 'Products')
 
@section('content')
 
    <div class="container products">
  
        <div class="row">
   
            @foreach($foodItems as $foodItem)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $foodItem->image_url }}" width="500" height="300">
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
 
@endsection