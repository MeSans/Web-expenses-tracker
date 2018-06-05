@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "User";
// use resources/views/app.blade.php;
 ?>


<div class="container">
        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ URL::to('UserManagement') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('UserManagement/create') }}">Create an {{$name_of_thing}}</a>
                </li>
              </ul>

    {{-- <nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('Expense') }}">{{$name_of_thing}}s</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('Expense') }}">View {{$name_of_thing}}s </a></li>
        <li><a href="{{ URL::to('Expense/create') }}">Create a {{$name_of_thing}}</a>
    </ul>
</nav> --}}
<br>
<h1>All the {{$name_of_thing}}s</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Is_admin</td>
            <td>Creation timestamp</td>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->is_admin}}</td>
            <td>{{ $value->created_at}}</td>
            <td class="col-6">
                    <a class="btn btn-small ">
                {{ Form::open(array('url' => 'UserManagement/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this User', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }} </a>
                <a class="btn btn-small btn-success" href="{{ URL::to('UserManagement/' . $value->id) }}">Show this {{$name_of_thing}}</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('UserManagement/' . $value->id . '/edit') }}">Edit this {{$name_of_thing}}</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection