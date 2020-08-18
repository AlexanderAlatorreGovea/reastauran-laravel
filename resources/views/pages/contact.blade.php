@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}}
@endsection

@section('content')
    <div id="contact-page">
      <section class="section-contact bg1-pattern p-t-90 p-b-113">
		  <div class="t-center" style="padding-bottom: 1rem">
			<span class="tit2 t-center">
				Contact Us
			</span>
			<h3 id="contact-us_title" class="tit3 t-center m-b-35 m-t-2">
				Reach out to us
			</h3> 
		  </div>
		<!-- Map -->
		<div class="container">
			<div class="map bo8 bo-rad-10 of-hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.8140418344683!2d-80.21037164997058!3d25.809708312831688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b14a3b8bbaa7%3A0xea85c8a06c579c54!2sBurger%20King!5e0!3m2!1sen!2sus!4v1583531624923!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div> 

		<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Send us a Message
			</h3>

			<form method="POST" action="/contact" class="wrap-form-reservation size22 m-l-r-auto">
				@csrf 
				<div class="row">
					<div class="col-md-4">
						<!-- Name -->  
						<span class="txt9">
							Name
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20 @error('email') is-invalid @enderror" type="text" name="name"value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="col-md-4">
						<!-- Email -->
						<span class="txt9">
							Email
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input id="inputfname" type="text" class="bo-rad-10 sizefull txt10 p-l-20 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="col-md-4">
						<!-- Phone -->
						<span class="txt9">
							Phone
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input id="phone" type="text" class="bo-rad-10 sizefull txt10 p-l-20 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone">

							@error('phone')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="col-12">
						<!-- Message -->
						<span class="txt9">
							Message
						</span> 

						<textarea id="message" type="text" class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3 @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" autofocus placeholder="Message"></textarea>

						@error('message')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button id="submit-btn" type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						Submit
					</button>
				</div>
			</form>

			<div class="row p-t-135" id="bottom-contact">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img id="lazy" src="assets/images/map-icon.png" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

							<span class="txt23 size38">
								{{$settings["general"]->address_1}}
								{{$settings["general"]->address_2}},<br>
								{{$settings["general"]->city}}, 
								{{$settings["general"]->state}} {{$settings["general"]->zipcode}}
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img id="lazy" src="assets/images/phone-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

							<span class="txt23 size38">
								(+1) 96 716 6879
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img id="lazy" src="assets/images/clock-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Opening Hours
							</span>

							<span class="txt23 size38">
								09:30 AM – 11:00 PM <br>Every Day
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
@endsection