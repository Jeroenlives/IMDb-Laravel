<!doctype html>
<html lang="en">
@include('bootstrap.components.head')
<body>
    @include('bootstrap.navbar.dbnav')
    <div class="app container-fluid">
        @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
        @yield('content')
    </div>
</body>
</html>