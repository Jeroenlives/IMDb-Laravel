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
                                @slot('href')
                                    {{ 'user/'. Auth::user()->id. '/' }}
                                @endslot
                                Go to your profile!
                            @endcomponent
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
