<!DOCTYPE html>
<html lang="en">
   <head>
        @include('admin.layouts.partials.head')  
   </head>
<body>
    <div class="loader"></div>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                    @include('admin.layouts.partials.header')
                        @include('admin.layouts.partials.sidebar')
                            @yield('content')
                @include('admin.layouts.partials.footer')
            </div>
        </div>
      @include('admin.layouts.partials.scripts')  
</body>
</html>
