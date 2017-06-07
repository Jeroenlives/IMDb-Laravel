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
        <!-- Left nav -->
        <ul class="nav navbar-nav">
            @component('bootstrap.navbar.parts.item')
                @slot('href', "/")
                Home
            @endcomponent
            @component('bootstrap.navbar.parts.item')
                @slot('href', "movies/")
                Movies
            @endcomponent
            @component('bootstrap.navbar.parts.item')
                @slot('href', 'series/')
                Series
            @endcomponent
            @component('bootstrap.navbar.parts.dropdown')
                @slot('name', "More")
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "awards/")
                    Awards
                @endcomponent
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "Celebs")
                    Celebs
                @endcomponent
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "About")
                    About
                @endcomponent
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "Contact")
                    Contact
                @endcomponent
            @endcomponent
        </ul>
        <form action="#" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
        <!-- Right nav -->
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                @component('bootstrap.navbar.parts.dropdown')
                    @slot('name')
                        Welcome, {{ Auth::user()->firstname }}!
                    @endslot
                    @component('bootstrap.navbar.parts.item')
                        @slot('href', 'logout/')
                        Logout
                    @endcomponent
                    @if(! Auth::user()->isAdmin() AND ! Auth::user()->isModerator())
                        @component('bootstrap.navbar.parts.item')
                            @slot('href')
                                {{ 'user/'. Auth::user()->id . '/' }}
                            @endslot
                            Profile
                        @endcomponent
                    @endif
                    <li role="separator" class="divider"></li>
                    @if(Auth::user()->isModerator())
                        @component('bootstrap.navbar.parts.item')
                            @slot('href', '#')
                            Control Panel
                        @endcomponent
                        @component('bootstrap.navbar.parts.item')
                            @slot('href', '#')
                            Users
                        @endcomponent
                    @endif
                @endcomponent
            @else
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "login/")
                    Log in
                @endcomponent
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "register/")
                    Register
                @endcomponent
            @endif
        </ul>
    </div>
</nav>