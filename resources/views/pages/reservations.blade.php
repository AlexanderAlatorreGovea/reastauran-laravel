
@extends('layouts.app')

@section('title')
Reservations - {{$settings["general"]->site_title}} 
@endsection
 
@section('content')
    <div id="waitlist-page">
      <div class="content-box">
        <section class="section-reservation bg1-pattern p-t-100 p-b-113">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 p-b-30">
                <div class="t-center">
                  <span class="tit2 t-center">
                    Reservation
                  </span>
      
                  <h3 class="tit3 t-center m-b-35 m-t-2">
                    Book table
                  </h3>
                </div>
              </div>
            </div>

            <form method="POST" action="/reservations">
              @csrf
              <div class="form-group">
                <label for="inputfname">First Name</label>
                <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="John">

                @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputlname">Last Name</label>
                <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Doe">

                @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputemail">Email address</label>
                <input id="inputemail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="John_doe231203@gmail.com">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputphonenumber">Phone Number</label>
                <input id="inputphonenumber" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="347-578-9090">

                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="guestsinput">How Many Guest</label>
                <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror" id="guestsinput">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                @error('guests_total')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="timeinput">What Time?</label>
                <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror" id="timeinput">
                  <option value="6">6:00 PM</option>
                  <option value="7">7:00 PM</option>
                  <option value="8">8:00 PM</option>
                  <option value="9">9:00 PM</option>
                  <option value="10">10:00 PM</option>
                </select>
                @error('time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
              </div>
            </form>

            <div class="info-reservation flex-w p-t-80">
              <div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
                <h4 class="txt5 m-b-18">
                  Reserve by Phone
                </h4>
      
                <p class="size25">
                  Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus.
                  <span class="txt25">Nulla vulputate</span>
                  , lectus vel volutpat efficitur, orci
                  <span class="txt25">lacus sodales</span>
                   sem, sit amet quam:
                  <span class="txt24">(001) 345 6889</span>
                </p>
              </div>
      
              <div class="size24 w-full-md p-t-40">
                <h4 class="txt5 m-b-18">
                  For Event Booking
                </h4>
      
                <p class="size26">
                  Donec feugiat ligula rhoncus:
                  <span class="txt24">(001) 345 6889</span>
                  , varius nisl sed, tinci-dunt lectus sodales sem.
                </p>
              </div>
      
            </div>
          </div>
        </section>
      </div>
    </div>
    {{-- @include('includes.footer') --}}
@endsection