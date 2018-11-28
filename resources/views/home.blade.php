@extends('layouts.layout')
@section('content')
  <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a href="{{ route('login') }}">Login</a>
                  <a href="{{ route('register') }}">Register</a>
              @endauth
          </div>
      @endif

      <div class="content">
          <div class="title m-b-md">
              S I A P
          </div>

          <div class="links">
              <a href="https://laravel.com/docs">Documentation</a>
              <a href="https://laracasts.com">Laracasts</a>
              <a href="https://laravel-news.com">News</a>
              <a href="https://forge.laravel.com">Forge</a>
              <a href="https://github.com/laravel/laravel">GitHub</a>
          </div>
      </div>
  </div>
  <script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
  </script>
  <!-- Latest compiled and minified JavaScript -->
@endsection
