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
                            @slot('title', 'New person')
                            @slot('href', 'database/persons/create')
                            @slot('method', 'post')
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'fname')
                                @slot('label', 'First name')
                                @slot('type', 'text')
                                @slot('name', 'firstname')
                                {{--@slot('required', TRUE)--}}
                            @endcomponent
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'prefix')
                                @slot('label', 'Prefix')
                                @slot('type', 'text')
                                @slot('name', 'prefix')
                                {{--@slot('required', TRUE)--}}
                            @endcomponent
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'lname')
                                @slot('label', 'Last name')
                                @slot('type', 'text')
                                @slot('name', 'lastname')
                                {{--@slot('required', TRUE)--}}
                            @endcomponent
                            @component('bootstrap.form.parts.textarea')
                                @slot('id', 'bio')
                                @slot('label', 'Biography')
                                @slot('rows', 3)
                                @slot('name', 'biography')
                            @endcomponent
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'bday')
                                @slot('label', 'Birthday')
                                @slot('type', 'date')
                                @slot('placeholder', 'Birthday (YYYY-mm-dd)')
                                @slot('name', 'birthday')
                            @endcomponent
                            @component('bootstrap.form.parts.button')
                                @slot('type', 'submit')
                                Add person
                            @endcomponent
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection