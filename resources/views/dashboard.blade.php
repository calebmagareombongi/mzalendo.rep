<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>M~zalendo</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- style css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- Responsive-->
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
  <!-- fevicon -->
  <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
</head>
<!-- body -->

<body>



 <!-- header section start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo"><a href="index.html"><img src="images/logo.png" width="50" height="50"></a></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="index.php">Home</a>
        <a class="nav-item nav-link" href="#about_main">About</a>
        <a class="nav-item nav-link" href="#jobs">Jobs</a>
        <a class="nav-item nav-link" href="#announcements">Announcements</a>
        <a class="nav-item nav-link" href="#projects">Projects</a>

        <a class="nav-item nav-link" href="#contactus">E-services</a>

        <a class="nav-item nav-link" href="#contactus">Contact us</a>
    @if(auth()->check())
  <a class="nav-item nav-link" href="{{ route('dashboard') }}">Dashboard</a>

<form  class="nav-item nav-link" method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="nav-item nav-link">Logout</button>
</form>


  <span class="nav-item nav-link">Welcome, {{ auth()->user()->name }}</span>
@else
  <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
  <a class="nav-item nav-link" href="{{ route('register') }}">Register</a>
@endif

      </div>
    </div>
  </nav>
  <!-- header section end -->



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


</body>