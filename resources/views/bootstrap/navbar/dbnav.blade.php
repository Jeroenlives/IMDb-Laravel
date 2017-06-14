<nav class="navbar navbar-default">
    @include('bootstrap.navbar.parts.head')
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
                    {{ Auth::user()->username }}
                @endslot
                @component('bootstrap.navbar.parts.item')
                    @slot('href', 'logout')
                    Logout
                @endcomponent
            @endcomponent
        </ul>
    </div>
</nav>