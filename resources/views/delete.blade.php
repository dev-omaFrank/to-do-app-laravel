@extends('layout') 
@section('content') 
<section class="header section-padding">
        <div class="background">&nbsp;</div>
        <div class="container">
            <div class="header-text">
                <h1>Delete</h1>
                <p>

                </p>
            </div>
        </div>
    </section>


    <section class="section-padding">
        <div class="jumbotron text-center">
            <h1>Do you want to delete Task {{ $task->id }}? </h1>

            {{ html()->form('POST', '/edit')->open()->class('form') }}

            {{ html()->hidden('id', $task->id) }}

            <div class="form-group">
                {{ html()->button('Save Task')->class('btn btn-primary') }}
                <a href="{{ action('tasks.home') }}" class="btn btn-danger"> No </a>
            </div>

            {{ html()->form()->close() }}

        </div>
    </section>
    </div>
@endsection
