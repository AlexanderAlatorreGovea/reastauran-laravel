@component('mail::message')

# Thank you for your order <strong>{{ $reservation['fname'] }}</strong>
<p>We have you down for {{ $reservation['time'] }}</p>
<p>We are looking foward to seeing you soon</p>

Best,

Pato Foods
@endcomponent
 