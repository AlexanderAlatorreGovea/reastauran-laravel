

@extends('layouts.app')
@section('title')
Food Items - {{$settings["general"]->site_title}} 
@endsection
 
@section('title', 'Products')
   
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="order-now" style="width: 100vw; height: 200vh; background: white;">
        <h1 style="text-transform: uppercase; font-family: Courgette; font-size: 50px; line-height: 1.2; color: #d61c22; padding-top: 5rem; text-align: center;">Order Now</h1>
        <div class="container products" style="background: white; padding-top: 2rem;">
            <div class="row">
                    @foreach($foodItems as $foodItem)
                        <div class="col-xs-18 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img style="object-fit: contain; width: 100%;" src="{{ $foodItem->image_url }}" width="500" height="300">
                                <div class="caption">
                                    <h4>{{ $foodItem->title }}</h4>
                                    <p>{{ str_limit(strtolower($foodItem->description), 50) }}</p>
                                    <p><strong>Price: </strong> {{ $foodItem->price }}$</p>
                                    <p class="btn-holder">
                                    <button 
                                        id="food-item-btn"
                                        data-id="{{ $foodItem->id }}"
                                        {{-- href="{{ url('add-to-cart/'.$foodItem->id) }}"  --}}
                                        class="btn btn-warning btn-block text-center" 
                                        role="button"
                                    >
                                        Add to cart 
                                    </button> 
                                    </p> 
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div><!-- End row --> 
        </div>
    </div>
<script>
    //const foodItemBtn = document.getElementById('food-item-btn');
 
    // $("#food-item-btn").click(function (e) {
    //   //console.log($("#food-item-btn"))
    //  //foodItemBtn.addEventListener('click', function (e) {
   
    //     let food_item_id = ele.attr("data-id");
    //     let ele = $(this);

    //     $.ajax({
    //         //url: '{{ url('add-to-cart/'.$foodItem->id) }}',
    //         url: `add-to-cart/${food_item_id}`,
    //         method: "POST",
    //         data: {_token: '{{ csrf_token() }}'},
    //         //id: ele.attr("data-id"),
    //         id: food_item_id,
    //         success: function (response) {
    //             window.location.reload();
    //         }
    //     });
    // });

    const foodItemBtn = document.querySelector('#food-item-btn');
    console.log(foodItemBtn)
    foodItemBtn.addEventListener('submit',(function(e) {
    //async function post(data) {
        e.preventDefault();
    
        let food_item_id = ele.attr("data-id");
        
        let data = {
            "id": food_item_id,
            data: {_token: '{{ csrf_token() }}'}
        } 

        let headers = {
            "Content-Type": "application/json",                                                                                                
            "Access-Control-Origin": "*"
        }

        fetch(`/add-to-cart/${food_item_id}`, { 
            method: "POST",
            headers: headers,
            body:  JSON.stringify(data)
        })
        .then(function(response){ 
            return response.json(); 
        })
        .then(function(data){ 
            console.log(data)
        });
    }))
</script>
@endsection

<p><span style="font-weight: 400; font-size: 20px; color: #5c5c5c; font-family: wassem;">&ldquo;&rdquo;</span></p>