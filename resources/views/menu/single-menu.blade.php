@extends('layouts.app')

@section('title')
{{$foodItem}} - {{$settings["general"]->site_title}} 
@endsection

@section('content')
    <div id="single-menu-page"> 
      <section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
        <div class="container">
          <div class="row">
            <div class="col-md-10 p-r-35 p-r-15-lg m-l-r-auto">
              <div class="wrap-item-mainmenu p-b-22">
                <h1 class="tit-mainmenu tit10 p-b-25">
                  {{$foodItem}}
                </h1>
                <!-- Item mainmenu -->
                @foreach ($foodItems as $item)
                  <div class="item-mainmenu m-b-36">
                    <div class="flex-w flex-b m-b-3">
                      <a href="#" class="name-item-mainmenu txt21">
                        {{$item->title}}
                      </a>
      
                      <div class="line-item-mainmenu bg3-pattern"></div>
      
                      <div class="price-item-mainmenu txt22">
                        {{$item->price}}
                      </div>
                    </div>
      
                    <span class="info-item-mainmenu txt23">
                      {{$item->description}}
                    </span>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
    </div> 
@endsection