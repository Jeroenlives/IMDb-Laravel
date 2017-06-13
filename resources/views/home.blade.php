@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if(Auth::check())
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                            <div class="col-sm-2">
                                You are logged in!
                            </div>
                            <div class="col-sm-10">
                                @component('bootstrap.components.link')
                                    @if(! Auth::user()->isAdmin() OR ! Auth::user()->isModerator())
                                    @slot('href')
                                        {{ 'user/'. Auth::user()->id. '/' }}
                                    @endslot
                                        Go to your profile!
                                    @else
                                        @slot('href', 'database/')
                                        Go to the control panel!
                                    @endif
                                @endcomponent
                            </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-body">
                <h1 class="display-1">Series</h1>
                <small>A list of recent series</small>
                <hr />
                {{ $series ?? "No series" }}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-body">
                <h1 class="display-1">Movies</h1>
                <small>A list of recent movies</small>
                <hr />
                {{ $movies ?? "No movies"}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-body">
                <h1 class="display-1">Celebs: born today</h1>
                <hr />
                {{ $celebs ?? "No celebs born on this day" }}
            </div>
        </div>
    </div>
</div>
@endsection
