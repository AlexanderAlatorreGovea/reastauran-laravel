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
        </section>

        <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

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
        moveTotal = 100;
        // Right Button
        $('.right-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide < maxSlides){
            currentSlide += 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
        // Left Button
        $('.left-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide != 0){
            currentSlide -= 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
      }
    }
    var a = window.matchMedia("(min-width: 998px)")
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

    let sticky = header.offsetTop;
  
    function addOpacity() {
      if (window.pageYOffset > sticky) {
        header.classList.add("opacity");
      } else {
        header.classList.remove("opacity");
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
  </script>
    </body>
</html>