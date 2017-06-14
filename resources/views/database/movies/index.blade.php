@extends('layouts.database')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8">
                <h1 class="display-1">
                    Movies
                    @component('bootstrap.components.link')
                        @slot('href')
                            {{ $prefix."/create" }}
                        @endslot
                        @push('classes', 'btn btn-default btn-lg')
                        New
                    @endcomponent
                </h1>
            </div>
        </div>
    </div>
@endsection