<!doctype html>
<html lang="en">
   <head>
      @include('landlord.share.head')
   </head>
   <body>
      <!-- Wrapper Start -->
      <div class="wrapper">
        @include('landlord.share.menu')
      <!-- TOP Nav Bar -->
       @include('landlord.share.top')
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
        <div class="container-fluid relative">
           @yield('content')
        </div>
     </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      @include('landlord.share.foot')
      <nav class="iq-float-menu">
         <input type="checkbox" href="#" class="iq-float-menu-open" name="menu-open" id="menu-open" />
         <label class="iq-float-menu-open-button" for="menu-open">
            <span class="lines line-1"></span>
            <span class="lines line-2"></span>
            <span class="lines line-3"></span>
         </label>
         <button class="iq-float-menu-item bg-info"  data-toggle="tooltip" data-placement="top" title="Direction Mode" data-mode="rtl"><i class="ri-text-direction-r"></i></button>
         <button class="iq-float-menu-item bg-danger"  data-toggle="tooltip" data-placement="top" title="Color Mode" id="dark-mode" data-active="true"><i class="ri-sun-line"></i></button>
         <button class="iq-float-menu-item bg-warning" data-toggle="tooltip" data-placement="top" title="Comming Soon"><i class="ri-palette-line"></i></button>
      </nav>
      </div>

      @include('landlord.share.js')
      @yield('js')
   </body>
</html>
