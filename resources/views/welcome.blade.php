@include('includes.header')
@include('includes.navbar')

<!--Secures only logged in users can acces the system -->
@guest
 <!-- if guest -->
 @include('includes.login')
 
@else
<!-- if logged in -->
test
@include('includes.footer')
@endguest