@extends('layout')
@section('content')
    <section class="header">
        <div class="background">&nbsp;</div>
        <section class="header section-padding">
            <div class="background">&nbsp;</div>
            <div class="container">
                <div class="header-text">
                    <h1>To-do Application: The Easiest Way</h1>
                    <p>
                        Fastest way to track your activities using
                        <br> Laravel 4 framework!
                    </p>
                </div>
            </div>
        </section>
    </section>

    <div class="container">
        <section class="section-padding">
            <div class="jumbotron text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>
                            <span class="grey">Our</span> To-do List
                        </h1>
                    </div>
                    @if ($tasks->isEmpty())
                        <p>There are currently no tasks available</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->id }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>{{$task->done ? 'Done' : 'Not Done'}}</td>
                                        <td>
                                             <a href="{{ route('tasks.edit', $task->id) }}"
                                             class="btn btn-info">Edit</a>
                                            
                                             <a href="{{ route('tasks.delete', $task->id) }}"
                                             class="btn btn-danger">Delete</a>
                                             
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </section>
    </div>

    </div>
@endsection
