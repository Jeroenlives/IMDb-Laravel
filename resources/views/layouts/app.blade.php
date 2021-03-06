@include('bootstrap.components.html')

<body>
    @include('bootstrap.navbar.nav')
    <div id="app container-fluid">
        @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
        @yield('content')
    </div>
</body>
</html>
