@extends('layout')
@section('content')

    <section class="header section-padding">
        <div class="background">&nbsp;</div>
        <div class="container">
            <div class="header-text">
                <h1>Create</h1>
                <p> Create tasks page
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="section-padding">
            <div class="jumbotron text-center">

                <h1>Create A Task</h1>
                {{ html()->form('POST', '/create')->open() }}
                <div class="form-group">
                    {{ html()->label('Title') }}
                    {{ html()->input('text', 'title')->placeholder('Your name')->class('form-control')->required() }}
                </div>

                <div class="form-group">
                    {{ html()->label('Body')->class('form-label') }}
                    {{ html()->input('text', 'body')->placeholder('Your name')->class('form-control')->required() }}
                </div>

                <div class="form-group">
                    {{ html()->button('Create Task')->class('btn btn-primary') }}
                </div>
                {{ html()->form()->close() }}
            </div>
        </section>
    </div>
@endsection
