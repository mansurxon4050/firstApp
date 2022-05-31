@extends('layout')
@section('main-content')

    <div>
        <div class="float-start">
            <h4 class="pb-3 ">My Tasks</h4>

        </div>
        <div class="float-end">
            <a href="{{route('task.create')}}" class="btn btn-info">Create task</a>
        </div>
        <div class="clearfix"></div>
        @php

        @endphp

    </div>
    <div class="card">
        <div class="card-header">First Task
            <span class="badge rounded-pill bg-warning text-dark">time</span>
        </div>

        <div class="card-body">
            <div class="card-text">
                <div class="float-start">
                    lorem ipsum dolor sit amet, consectetur adip lorem ipsum dolor sit amet <br>
                    <span class="badge rounded-pill bg-info text-dark">Todo</span>
                    <small>Last Update</small>
                </div>
                <div class="float-end">
                    <a href="{{route('task.edit',$task->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{route('task.destroy',$task->id)}}" class="btn btn-danger">Delete</a>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>

@endsection
