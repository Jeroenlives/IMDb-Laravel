@extends('layouts.database')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-body">
                    @if(count($errors->all()) > 0)
                        @foreach($errors->all() as $error)
                            <p class="alert alert-warning">
                                {{ $error }}
                            </p>
                        @endforeach
                    @endif
                    <div class="col-md-6 col-lg-offset-3">
                        @component('bootstrap.form.form')
                            @slot('title', 'New movie')
                            @slot('href', 'database/movies/create')
                            @slot('method', 'post')
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'movie-title')
                                @slot('label', 'Title')
                                @slot('type', 'text')
                                @slot('name', 'title')
                                {{--@slot('required', TRUE)--}}
                            @endcomponent
                            @component('bootstrap.form.parts.textarea')
                                @slot('id', 'movie-desc')
                                @slot('label', 'Description')
                                @slot('rows', 3)
                                @slot('name', 'description')
                                {{--@slot('required', TRUE)--}}
                            @endcomponent
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'movie-length')
                                @slot('label', 'Duration')
                                @slot('type', 'text')
                                @slot('name', 'duration')
                                {{--@slot('required', TRUE)--}}
                            @endcomponent
                            @component('bootstrap.form.parts.textarea')
                                @slot('id', 'movie-plot')
                                @slot('label', 'Storyline')
                                @slot('rows', 3)
                                @slot('name', 'plot')
                            @endcomponent
                            @component('bootstrap.form.parts.button')
                                @slot('type', 'submit')
                                Add movie
                            @endcomponent
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection