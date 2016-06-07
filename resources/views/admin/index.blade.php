
@include('admin.includes.head')
  <body>
  <!-- container section start -->
  <section id="container" class="">
      @include('admin.includes.header')
      <!--sidebar start-->
     @include('admin.includes.sidebar')
      
     @yield('content')
  </section>
@include('admin.includes.footer')
 
  </body>
</html>
