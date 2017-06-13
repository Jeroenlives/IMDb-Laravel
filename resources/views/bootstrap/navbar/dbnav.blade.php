<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <!-- Left Nav -->
        <ul class="nav navbar-nav">
            @component('bootstrap.navbar.parts.item')
                @slot('href', 'database')
                Home
            @endcomponent
            @component('bootstrap.navbar.parts.item')
                @slot('href', 'database/movies')
                Movies
            @endcomponent
            @component('bootstrap.navbar.parts.item')
                @slot('href', 'database/series')
                Series
            @endcomponent
            @component('bootstrap.navbar.parts.item')
                @slot('href', 'database/persons')
                Persons
            @endcomponent
            @component('bootstrap.navbar.parts.item')
                @slot('href', 'database/users')
                Users
            @endcomponent
        </ul>
        <!-- Right nav -->
        <ul class="nav navbar-nav navbar-right">
            @component('bootstrap.navbar.parts.dropdown')
                @slot('name')
                    {{ Auth::user()->firstname }}
                @endslot
                @component('bootstrap.navbar.parts.item')
                    @slot('href', 'logout')
                    Logout
                @endcomponent
            @endcomponent
        </ul>
    </div>
</nav>