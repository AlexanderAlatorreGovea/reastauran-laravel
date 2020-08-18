
<section id="food-preview">
    <h2>We have everything you need to kill your hunger</h2>
    
    <div class="container">
      <div class="left-btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="right-btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="food-slider"> 
        <div class="sliding-system">
        @foreach ($categories as $category)
            <a href="/menu/{{$category->title}}" class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  {{$category->title}}
                </div>
                <p class="food-description">
                  {{$category->description}}
                </p>
                <div class="food-image">
                  <img id="lazy" src="{{$category->image_url}}">
                </div>
              </div>
          </a>
        @endforeach
          
          
        </div>
      </div>
    </div>

  </section>


  @section('scripts')
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
  @endsection