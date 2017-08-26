<!DOCTYPE html>
<html>
  @include('admins._partials.head')
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      @include('admins._partials.header')
      <!-- Side-Nav-->
      @include('admins._partials.sidebar')
      <div class="content-wrapper">
        @yield('content')
      </div>
    </div>
    @include('admins._partials.foot')
  </body>
</html>
