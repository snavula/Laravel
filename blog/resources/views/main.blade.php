<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>
  <body>
     @include('partials._nav')        
    <div class="container">
        @yield('content')
    </div><hr>
    @include('partials._footer')
    @include('partials._javascript')
    @yield('scripts')
  </body>
</html>