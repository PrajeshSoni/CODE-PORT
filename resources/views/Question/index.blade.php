@extends('layouts.layout')
@section('content')

<div class="container-fluid">
  <h2>Question</h2>

  <a href="{{route('question.create') }}" class="btn btn-success"> Add New</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>

        <th scope="col">Tag</th>
        <th scope="col">operation</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($Questions as $Questions)
      <tr>
        <th scope="row">{{ $Questions->id }}</th>
        <td>{{ $Questions->q_title }}</td>
        <td>{{ $Questions->q_body }}</td>
        <td>{{ $Questions->t_title }}</td>
        <td><a href="{{route('question.delete',$Questions->id) }}" class="btn btn-danger">Delete</a>
          <a href="{{route('question.edit',$Questions->id) }}" class="btn btn-primary">Edit</a>
        </td>
      </tr>


      @endforeach
    </tbody>
  </table>
</div>
@stop