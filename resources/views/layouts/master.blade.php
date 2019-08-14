@include('layouts.header')
    @include('layouts.nav')
    <main role="main">
      @include('layouts.jumbotron')
      <div class="container">
        @yield('content')
      </div> <!-- /container -->
@include('layouts.footer')
