<!-- Use layout; section content = body -->
@extends('layouts.app')
@section('content')

<!--Secures only logged in users can acces the system -->
@guest
 <!-- if guest -->
 
 @include('includes.loginInclude')
@else
<!-- if logged in -->

<h1>customer page</h1>
@include('includes.footer')

@endguest

<!-- Ends content section -->
@endsection