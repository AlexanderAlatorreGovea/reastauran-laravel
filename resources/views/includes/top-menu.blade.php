<header>
    <!-- Header desktop -->
    <div style="height: 77px;" class="wrap-menu-header gradient1 trans-0-4">
        <div class="menu-btn">
            <div class="menu-btn__burger"></div>
        </div>
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo-top">
                    <a href="/">
                        <img id="logo-top" src="/img/clipart-restaurant-restaurant-logo-5.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
                    </a>
                </div>
 
                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu-top">
                        <ul class="main_menu">

                            <li>
                                <a href="/menu">Food</a>
                            </li>
                            <li>
                                <a href="/about">About Us</a>
                            </li>
                              
                            <li>
                                <a href="/reservations">Reservations</a>
                            </li>
                            <li>
                                <a href="/offers">Offers</a>
                            </li> 
                            <li>
                                <a href="/contact">Contact</a>
                            </li> 
                            <li>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </button>
                                    <div class="dropdown-menu" style="transform: none; transform: translate3d(0px, 0px, 0px); left: -175%;">
                                        <div class="row total-header-section">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                            </div>
                     
                                            <?php $total = 0 ?>
                                            @foreach((array) session('cart') as $id => $details)
                                                <?php $total += $details['price'] * $details['quantity'] ?>
                                            @endforeach
                     
                                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                            </div>
                                        </div> 
                     
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <div class="row cart-detail">
                                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                        <img src="{{ $details['image_url'] }}" />
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                        <p>{{ $details['title'] }}</p>
                                                        <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a style="padding-top: 14px;" href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header> 

@section('scripts')
<script src="{{ asset('js/app.js') }}"></script> 
    <script>
    const dropdown = document.querySelector('.dropdown');

    let dropdownMenu = document.querySelector('.dropdown-menu');
    let cartPage = document.URL.includes('cart');
    let menuOpen = false;   
    //console.log(document.URL.includes('cart'))    
        dropdown.addEventListener('click', () => {
            if (!document.URL.includes('cart')) {
                if(!menuOpen) {
                    dropdownMenu.classList.add('show');
                
                    menuOpen = true;
                } else {
                    dropdownMenu.classList.remove('show');
                
                    menuOpen = false;
                }
             } else {
                 return
             }
        })

        window.onload = function() {
            // Grab features section from the DOM
            var features = document.querySelector('.dropdown');
            //console.log(features)
            // Grab dropdown menu from the DOM
            var dropdown = document.getElementsByClassName("dropdown-menu")[0];
            // Creates function to add dropdown menu
            var addMenu = function addDropDownMenu() {
                dropdown.classList.add("on");
                //console.log("hi");
            };
            // Creates function to remove dropdown menu
            var removeMenu = function removeDropDownMenu() {
                dropdown.classList.remove("on");
                //console.log("bye");
            };
            // Add mouse over event to show menu
            features.addEventListener("mouseover", addMenu);
            // Add mouse out event to remove menu
            features.addEventListener("mouseout", removeMenu);
        };

    </script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

@endsection
{{-- 
@section('scripts')  
    <script>
        const dropdown = document.querySelector('.dropdown');
    let dropdownMenu = document.querySelector('.dropdown-menu');
    let cartPage = document.URL.includes('cart');
    let menuOpen = false;   
    console.log(document.URL.includes('cart'))    
        dropdown.addEventListener('click', () => {
            if (!document.URL.includes('cart')) {
                if(!menuOpen) {
                    dropdownMenu.classList.add('show');
                
                    menuOpen = true;
                } else {
                    dropdownMenu.classList.remove('show');
                
                    menuOpen = false;
                }
             } else {
                 return
             }
        })

        window.onload = function() {
            // Grab features section from the DOM
            var features = document.querySelector('.dropdown');
            console.log(features)
            // Grab dropdown menu from the DOM
            var dropdown = document.getElementsByClassName("dropdown-menu")[0];
            // Creates function to add dropdown menu
            var addMenu = function addDropDownMenu() {
                dropdown.classList.add("on");
                console.log("hi");
            };
            // Creates function to remove dropdown menu
            var removeMenu = function removeDropDownMenu() {
                dropdown.classList.remove("on");
                console.log("bye");
            };
            // Add mouse over event to show menu
            features.addEventListener("mouseover", addMenu);
            // Add mouse out event to remove menu
            features.addEventListener("mouseout", removeMenu);
        };
    </script>
@endsection --}}
