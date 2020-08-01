{{-- @extends('layouts.app')
@section('title')
    Checkout - {{$settings["general"]->site_title}} 
@endsection --}}

@section('content') 
    <?php $total = 0 ?> 
    @foreach((array) session('cart') as $id => $details)
        <?php 
            $total += $details['price'] * $details['quantity'] 
        ?>
    @endforeach    

    <?php 
        $amount = intval($total* 100);
    ?>
 
    <form action="/charge" method="POST"> 
        {{ csrf_field() }}
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ env('STRIPE_PUB_KEY') }}"
                data-amount={{ $amount }}
                data-name="Stripe Demo"
                data-description="Online course about integrating Stripe"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="usd">
        </script>
    </form>
@endsection
