<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>  
    <section id="app-layout"> 
        @include('includes.top-menu')
        @include('includes.side-menu')
        <section id="content-section">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        @yield('content')
        </section>
        @include('includes.footer')
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>
        let slides = $('.sliding-system a.slide').length;
        let maxSlides;
        let moveTotal;
        let currentSlide = 0; 
        $(window).resize(function(){
        currentSlide = 0;
        $('.sliding-system').css('transform', 'translate3d(-0%, 0,0');
        })
        function desktopSlider(){ 
        if(a.matches){
            maxSlides = Math.ceil((slides * 20) / 100);
            moveTotal = 20;
            // Right Button
            $('.right-btn').on('click', () => {
            console.log(slides)
            console.log(maxSlides)
            console.log(currentSlide)
            console.log(moveTotal)
            if(currentSlide < maxSlides){
                currentSlide += 20;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
            }
            });
            // Left Button
            $('.left-btn').on('click', () => {
            console.log(slides)
            console.log(maxSlides)
            console.log(currentSlide)
            console.log(moveTotal)
            if(currentSlide != 0){
                currentSlide -= 20;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
            }
            });
        }
        }
        const a = window.matchMedia("(min-width: 998px)")
        desktopSlider(a);
        a.addListener(desktopSlider);
        function tabletSlider(){
        if(b.matches){
            maxSlides = Math.ceil((slides * 50) / 100);
            moveTotal = 100;
            // Right Button
            $('.right-btn').on('click', () => {
            console.log('clicked right btn')
            if(currentSlide < ((maxSlides * 100) - 100)){
                currentSlide += 50;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
            }
            });
            // Left Button
            $('.left-btn').on('click', () => {
            console.log('clicked right btn')
            if(currentSlide != 0){
                currentSlide -= 50;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
            }
            });
        }
        }
        var b = window.matchMedia("(min-width: 768px) and (max-width: 997px");
        console.log(b)
        tabletSlider(b);
        b.addListener(tabletSlider);

        const menuBtn = document.querySelector('.menu-btn');
        let menuOpen = false;   
        let sideMenu = document.querySelector('.side-menu');
        menuBtn.addEventListener('click', () => {
        if(!menuOpen) {
            menuBtn.classList.add('open');
            sideMenu.classList.add('open-menu')
            menuOpen = true;
        } else {
            menuBtn.classList.remove('open');
            sideMenu.classList.remove('open-menu');
            menuOpen = false;
        }
        });

        /* STICKY HEADER ANIMATION */
        window.onscroll = function() {
        addOpacity();
        };

        let header = document.querySelector(".wrap-menu-header");
        let logo = document.getElementById("logo-top");
        let sticky = header.offsetTop;
    
        function addOpacity() {
        if (window.pageYOffset > sticky) {
            header.classList.add("opacity");
            logo.classList.add("shrink-logo");
        } else {
            header.classList.remove("opacity");
            logo.classList.remove("shrink-logo");
        }
        }

        document.addEventListener('DOMContentLoaded', () => {
            let resizer = new ResizeObserver(handleResize);
            resizer.observe(header);
        });

        function handleResize(entries) {
            let div = entries[0].target;
            if (entries[0].contentRect.width <  993) {
                header.classList.remove("sticky");
            } else {
                header.classList.add("sticky");
            }
        }

        //CLOSE MESSAGE POPUP AFTER SIGNING UP TO EMAIL LIST
        const alert = document.getElementById('message');
        const closeBtn = document.getElementById('close');

        closeBtn.addEventListener('click', () => {
            alert.style.display = 'none';
        });
        
    </script>
    {{-- <script>
        const dropdown = document.querySelector('.dropdown');
        let dropdownMenu = document.querySelector('.dropdown-menu');
        let cartPage = document.URL.includes('cart');
        let menuOpen = false;   
        console.log(document.URL.includes('cart'))    
        dropdown.addEventListener('click', () => {
            //if (!document.URL.includes('cart')) {
                if(!menuOpen) {
                    dropdownMenu.classList.add('show');
                
                    menuOpen = true;
                } else {
                    dropdownMenu.classList.remove('show');
                
                    menuOpen = false;
                }
                //} else {
                //  return
                //}
        })
    </script> --}}
  </body>
</html>