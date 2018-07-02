@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/todo.css') }}">

@stop

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> -->
        <div class="col-sm-7 col-sm-offset-1">
            <h4 class="desc">Tasks</h4>
            <div id="task-container" action="{{ route('getTask') }}"></div>
        </div>
        <div class="col-sm-3">
            <h4 class="desc">ADD Task</h4>
            <form id="form-create-task" class="form" method="POST" action="{{ route('createTask') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="form-title">Title</label>
                    <input id="form-title" type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="form-description">Description</label>
                    <textarea placeholder="What is this task about?" name="description" id="form-description" rows="5" class="form-control"></textarea>
                </div>   
                <button type="submit" class="btn btn-brand btn-block">Create</button>
            </form>

        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection


@section('javascript')
<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection