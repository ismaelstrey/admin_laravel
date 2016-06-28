
@include('admin.Includes.head')
  <body>
  <!-- container section start -->
  <section id="container" class="">
      @include('admin.Includes.header')
      <!--sidebar start-->
     @include('admin.Includes.sidebar')

     @yield('content')
  </section>
@include('admin.Includes.footer')

  </body>
</html>
