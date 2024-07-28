@extends('layouts.layout')
@section('content')
<div class="container-fluid">
  <h2>Tags</h2>


  <a href="{{route('tag.create') }}" class="btn btn-success"> Add New</a>
  <table class="table table-bordered">
    <thead>
      <tr>

        <th scope="col">Title</th>
        <th scope="col">description</th>

        <th scope="col">Icon</th>
        <th scope="col">operation</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($data as $data)
      <tr>
        <td>{{ $data->t_title }}</td>
        <td>{{ $data->t_des }}</td>
        <td><img src="{{url('icon')}}/{{$data['t_icon']}}" class="img-fluid img-thumbnail" alt=""></td>
        <td><a href={{"/tag/delete/". $data['id']  }} class="btn btn-danger" style="display:inline"> delete</a><a href={{"/tag/edit/". $data['id'] }} class="btn btn-primary" style="display:inline">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop