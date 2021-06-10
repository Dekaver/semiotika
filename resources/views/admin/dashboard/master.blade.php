<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    @include('admin.dashboard.partials.head')
</head> 

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">

            @include('admin.dashboard.partials.sidebar')

            <!-- [ Layout container ] Start -->
            <div class="layout-container">

                @include('admin.dashboard.partials.navbar')

                <!-- [ Layout content ] Start -->
                <div class="layout-content">
                    
                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    
                    @include('admin.dashboard.partials.footer')
                </div>
            </div>
        </div>
    </div>
    @include('admin.dashboard.partials.scripts')

</body>
</html>