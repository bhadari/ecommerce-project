
<!DOCTYPE html>
<html lang="en">
@include('layout.admin-layout.header')

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @include('layout.admin-layout.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('layout.admin-layout.navbar')
    <!-- End Navbar -->
    @yield('content')
    @include('layout.admin-layout.footer')
  </main>

  @include('layout.admin-layout.scripts')
</body>

</html>