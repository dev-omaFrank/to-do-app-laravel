@extends('layout') @section('content') <section class="header section-padding">
        <div class="background">&nbsp;</div>
        <div class="container">
            <div class="header-text">
                <h1>Edit</h1>
                <p>
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="section-padding">
            <div class="jumbotron text-center">
                <h1>Edit Task {{ $task->id }}</h1>

                {{ html()->form('POST', '/edit')->open() }}

                {{ html()->hidden('id', $task->id) }}
                
                <div class="form-group">
                    {{ html()->label('Title') }}
                    {{ html()->input('text', 'title')->value($task->title)->class('form-control')->required() }}
                </div>

                <div class="form-group">
                    {{ html()->label('Body')->class('form-label') }}
                    {{ html()->input('text', 'body')->value($task->description)->class('form-control')->required() }}
                </div>

                <div class="form-group">
                    {{ html()->label('Done')->class('form-label') }}
                    {{ html()->checkbox('done', 1)->placeholder($task->done)->class('form-control')->required() }}
                </div>

                <div class="form-group">
                    {{ html()->button('Save Task')->class('btn btn-primary') }}
                </div>
                {{ html()->form()->close() }}

               

            </div>
    </div>
@stop
