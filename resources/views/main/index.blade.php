@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="drawer">
  <input id="my-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content">

    <div class="container-sm" data-aos="fade-right">
    <div class="hero min-h-screen ">
      <div class="hero-content flex-col lg:flex-row">
        <img data-aos="fade-right" src="https://api.lorem.space/image/movie?w=260&h=400" class="max-w-sm rounded-lg shadow-2xl" />
        <div class="">
          <h1 class="text-3xl font-bold sm:text-5xl">Hi! I'm Adam Ibnu !</h1>
          <p class="py-6 break">I'm a Backend Programmer that passionate to build a clean, easy-to-use, and powerful service. I'm enthusiastic about technology since I was in elementary school. I always can't wait for computer class every week in school, from that now I'm interested in programming.
            I started to learn code using PHP, and build my first Point of Sale app. Currently, I'm specialized in the Laravel framework and create various projects.</p>
          <label for="my-drawer" class="btn btn-primary drawer-button">Get Started</label>
        </div>
      </div>
    </div>
    </div>


    <!-- Page content here -->
   
  </div> 
  <div class="drawer-side">
    <label for="my-drawer" class="drawer-overlay"></label>
    <ul class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content">
      <!-- Sidebar content here -->
      
      <li class="mt-10"><a href="/"><i class="fa-solid fa-house fill-current text-2xl hover:text-3xl hover:animate-pulse"></i>Homepage</a></li>
      <li><a href="{{ Route('blog') }}"><i class="fa-solid fa-newspaper fill-current text-2xl hover:text-3xl hover:animate-pulse"></i>Blog</a></li>
      <li><a href="{{ Route('portofolio') }}"><i class="fa-solid fa-laptop-file fill-current text-2xl hover:text-3xl hover:animate-pulse"></i>Portfolio</a></li>
      <li><a href="{{ Route('about') }}"><i class="fa-solid fa-address-card fill-current text-2xl hover:text-3xl hover:animate-pulse"></i>About</a></li>
      
    </ul>
  </div>
</div>
@endsection


