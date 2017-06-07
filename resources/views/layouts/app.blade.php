@include('bootstrap.components.html')

<body>
    <div id="app container-fluid">
        @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
        @yield('content')
    </div>
</body>
</html>
