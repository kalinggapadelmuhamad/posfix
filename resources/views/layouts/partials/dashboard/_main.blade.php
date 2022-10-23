<div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.partials.dashboard._sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('layouts.partials.dashboard._navbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @yield('pages')
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      
      <!-- Footer -->
    </div>
</div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

