<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">
                @include('includes.sidebar')
            </div>

            <div class="main-panel">
                @if(isset($user))
                    @include('includes.top-navigation')
                @endif
                <div class="content">
                    @yield('content')
                </div>
                @include('includes.footer')
            </div>

        </div>
    </body>
    @include('includes.scripts')
</html>
