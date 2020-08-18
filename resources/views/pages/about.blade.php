@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}} 
@endsection

@section('content') 
    @if ($message = Session::get('success'))
        <div id="message" class="alert alert-success alert-block" style="margin-bottom: 0px">
          <button id="close" type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
    @endif
    @if (count($errors) > 0)
        <div id="message" class="alert alert-danger">
        <button id="close" type="button" class="close" data-dismiss="alert">×</button>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
        </div>
      @endif
     <div id="about-page">
      <section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
        <span class="tit2 t-center">
          About Page
        </span>
    
        <h3 id="title-reservation" class="tit3 t-center m-b-35 m-t-5" id="title-reservation">
          Our Story
        </h3>
    
        <p class="t-center size32 m-l-r-auto">
          Fusce at risus eget mi auctor pulvinar. Suspendisse maximus venenatis pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam purus purus, lacinia a scelerisque in, luctus vel felis. Donec odio diam, dignissim a efficitur at, efficitur et est. Pellentesque semper est ut pulvinar ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla et leo accumsan, egestas velit ac, fringilla tortor. Sed varius justo sed luctus mattis.
        </p>
      </section>

      <section id="normalize-top_margin" class="bg1-pattern p-t-120 p-b-105">
        <div class="container">
          <!-- Delicious -->
          <div class="row">
            <div class="col-md-6 p-t-45 p-b-30">
              <div class="wrap-text-delicious t-center">
                <span class="tit2 t-center">
                  Delicious
                </span>
    
                <h3 class="tit3 t-center m-b-35 m-t-5" id="title-reservation">
                  RECIPES
                </h3>
    
                <p class="t-center m-b-22 size3 m-l-r-auto">
                  Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                </p>
              </div>
            </div>
    
            <div class="col-md-6 p-b-30">
              <div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                <img id="lazy" src="assets/images/our-story-01.jpg" alt="IMG-OUR">
              </div>
            </div>
          </div>
    
    
          <!-- Romantic -->
          <div class="row p-t-170" id="normalize-top_margin">
            <div class="col-md-6 p-b-30">
              <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                <img id="lazy" src="assets/images/our-story-02.jpg" alt="IMG-OUR">
              </div>
            </div>
    
            <div class="col-md-6 p-t-45 p-b-30">
              <div class="wrap-text-romantic t-center">
                <span class="tit2 t-center">
                  Romantic
                </span>
    
                <h3 class="tit3 t-center m-b-35 m-t-5" id="title-reservation">
                  Restaurant
                </h3>
    
                <p class="t-center m-b-22 size3 m-l-r-auto">
                  Fusce iaculis, quam quis volutpat cursus, tellus quam varius eros, in euismod lorem nisl in ante. Maecenas imperdiet vulputate dui sit amet vestibulum. Nulla quis suscipit nisl.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="parallax0 parallax100" style="background-image: url(assets/images/bg-cover-video-02.jpg);">
        <div class="overlay0-parallax t-center size33"></div>
      </div>

      <section class="section-chef bgwhite p-t-115 p-b-95">
        <div class="container t-center">
          <span class="tit2 t-center">
            Meet Our
          </span>
    
          <h3 class="tit5 t-center m-b-50 m-t-5">
            Chef
          </h3>
    
          <div class="row">
            <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
              <!-- -Block5 -->
              <div class="blo5 pos-relative p-t-60">
                <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                  <a href="#"><img id="lazy" src="assets/images/avatar-02.jpg" alt="IGM-AVATAR"></a>
                </div>
    
                <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                  <a href="#" class="txt34 dis-block p-b-6">
                    Peter Hart
                  </a>
    
                  <span class="dis-block t-center txt35 p-b-25">
                    Chef
                  </span>
    
                  <p class="t-center">
                    Donec porta eleifend mauris ut effici-tur. Quisque non velit vestibulum, lob-ortis mi eget, rhoncus nunc
                  </p>
                </div>
              </div>
            </div>
    
            <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
              <!-- -Block5 -->
              <div class="blo5 pos-relative p-t-60">
                <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                  <a href="#"><img id="lazy" src="assets/images/avatar-03.jpg" alt="IGM-AVATAR"></a>
                </div>
    
                <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                  <a href="#" class="txt34 dis-block p-b-6">
                    Joyce Bowman
                  </a>
    
                  <span class="dis-block t-center txt35 p-b-25">
                    Chef
                  </span>
    
                  <p class="t-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies felis a sem tempus tempus.
                  </p>
                </div>
              </div>
            </div>
    
            <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
              <!-- -Block5 -->
              <div class="blo5 pos-relative p-t-60">
                <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                  <a href="#"><img id="lazy" src="assets/images/avatar-05.jpg" alt="IGM-AVATAR"></a>
                </div>
    
                <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                  <a href="#" class="txt34 dis-block p-b-6">
                    Peter Hart
                  </a>
    
                  <span class="dis-block t-center txt35 p-b-25">
                    Chef
                  </span>
    
                  <p class="t-center">
                    Phasellus aliquam libero a nisi varius, vitae placerat sem aliquet. Ut at velit nec ipsum iaculis posuere quis in sapien
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>  
  
      <div class="section-signup bg1-pattern p-t-85 p-b-85">
        <form method="post" action="{{ url('/about') }}" class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
          {{ csrf_field() }}
          <span class="txt5 m-10"> 
            Specials Sign up
          </span>
          <div id="margin-normalize" class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
            <input class="bo-rad-10 sizefull txt10 p-l-20" 
              type="text" 
              name="email" 
              placeholder="Email Adrress"
              for="email"
            >
            <i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
          </div>
    
          <!-- Button3 -->
          <button type="submit" id="submit-about_btn" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
            Sign-up
          </button>
        </form>
      </div> 
    </div> 
@endsection

<script>
  //CLOSE MESSAGE POPUP AFTER SIGNING UP TO EMAIL LIST
  const alert = document.getElementById('message');
    const closeBtn = document.getElementById('close');

  closeBtn.addEventListener('click', () => {
      alert.style.display = 'none';
  });
</script>