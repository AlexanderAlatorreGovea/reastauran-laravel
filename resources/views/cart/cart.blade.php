@extends('layouts.app')
@section('title')
    Shopping Cart - {{$settings["general"]->site_title}} 
@endsection

@section('content') 
    <div id="shopping-cart-section">
        <?php $total = 0 ?>
        <div id="shopping-cart" style="{{ $total === 0 ? '' : 'height: 100vh' }}">
            <h1 class="shopping-cart">Shopping Cart</h1>
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
            
                            <?php $total += $details['price'] * $details['quantity'] ?>
            
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['image_url'] }}" width="100" height="100" class="img-responsive"/></div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin">{{ $details['title'] }}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">${{ $details['price'] }}</td>
                                <td data-th="Quantity">
                                    <input type="number"  min="0" value="{{ $details['quantity'] }}" class="form-control quantity" />
                                </td>
                                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot> 
                    <tr class="visible-xs" style="{{ $total === 0 ? 'display: none;' : '' }}">
                        <td class="text-center"><strong>Total {{ $total }}</strong></td>
                        <td>
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
                                    data-currency="usd"
                                    data-panel-label="Pay Now"
                                    panelLabel="Pay Now"
                                    data-label="Pay Now"
                                >
                                </script>
                            </form>
                        </td>
                    </tr>
                    <h2 style="{{ $total === 0 ? 'font-size: 2rem; text-align: center; color: black;' : 'display: none;' }}">
                        There are no items in your cart :(
                    </h2>
                <tr>
                    <td>
                        <a  style="{{ $total === 0 ? 'margin-top: 24rem;' : '' }}"
                            href="{{ url('/menu') }}" 
                            class="btn btn-warning">
                            <i class="fa fa-angle-left"></i> 
                            Continue Shopping
                        </a>
                    </td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center">
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
<script> 
        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
<script src="{{ asset('js/app.js') }}"></script>  

@endsection  