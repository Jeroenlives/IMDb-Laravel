<nav class="navbar navbar-default navbar-static-top">
    @include('bootstrap.navbar.parts.head')
        <!-- Left nav -->
        <ul class="nav navbar-nav">
            @component('bootstrap.navbar.parts.item')
                @slot('href', "/")
                Home
            @endcomponent
            @component('bootstrap.navbar.parts.item')
                @slot('href', "movies")
                Movies
            @endcomponent
            @component('bootstrap.navbar.parts.item')
                @slot('href', 'series')
                Series
            @endcomponent
            @component('bootstrap.navbar.parts.dropdown')
                @slot('name', "More")
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "awards")
                    Awards
                @endcomponent
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "celebs")
                    Celebs
                @endcomponent
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "about")
                    About
                @endcomponent
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "contact")
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
                        Welcome, {{ Auth::user()->username }}!
                    @endslot
                    @component('bootstrap.navbar.parts.item')
                        @slot('href', 'logout')
                        Logout
                    @endcomponent
                    @if(! Auth::user()->isAdmin() AND ! Auth::user()->isModerator())
                        @component('bootstrap.navbar.parts.item')
                            @slot('href')
                                {{ 'user/'. Auth::user()->id . '' }}
                            @endslot
                            Profile
                        @endcomponent
                    @endif
                    @if(Auth::user()->isModerator())
                        <li role="separator" class="divider"></li>
                        @component('bootstrap.navbar.parts.item')
                            @slot('href', 'database')
                            Control Panel
                        @endcomponent
                    @endif
                @endcomponent
            @else
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "login")
                    Log in
                @endcomponent
                @component('bootstrap.navbar.parts.item')
                    @slot('href', "register")
                    Register
                @endcomponent
            @endif
        </ul>
    </div>
</nav>