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
                            @slot('title', 'New user')
                            @slot('href', 'database/users/create')
                            @slot('method', 'post')
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'username')
                                @slot('label', 'Username')
                                @slot('type', 'text')
                                @slot('name', 'title')
                                {{--@slot('required', TRUE)--}}
                            @endcomponent
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'email')
                                @slot('label', 'E-mail')
                                @slot('type', 'email')
                                @slot('name', 'email')
                                {{--@slot('required', TRUE)--}}
                            @endcomponent
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'password')
                                @slot('label', 'Password')
                                @slot('type', 'password')
                                @slot('name', 'password')
                                {{--@slot('required', TRUE)--}}
                            @endcomponent
                            @component('bootstrap.form.parts.input')
                                @slot('id', 'pswconfirm')
                                @slot('label', 'Password confirm')
                                @slot('type', 'password_confirmation')
                                @slot('name', 'password_confirm')
                            @endcomponent
                            @component('bootstrap.form.parts.button')
                                @slot('type', 'submit')
                                Add user
                            @endcomponent
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection