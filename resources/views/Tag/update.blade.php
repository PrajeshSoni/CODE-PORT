@extends('layouts.layout')
@section('content')


@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif



<div class="container">
  <h2>Edit Page</h2>
  <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('tag.index') }}"> Back</a>
  </div>
  <form method="POST" action="{{route('tag.update') }}">
    @csrf
    <div class="form-group">
      <input type="hidden" class="form-control" name="id" value="{{$data->id }}">
    </div>
    <div class="form-group">
      <label for="Title">Title:</label>
      <input type="Title" class="form-control" id="name" name="t_title" value="{{$data->t_title}}">
    </div>
    <div class="form-group">
      <label for="description">description:</label>
      <textarea name="t_des" class="form-control" id="description" cols="10" rows="2" value="{{$data->t_des}}"></textarea>
    </div>
    <div class="form-group">
      <label for="icon">Icon:</label>

      <input type="File" class="form-control" id="File" placeholder="Select File" name="t_icon" value="{{$data->t_icon}}">
    </div>
    <button type="submit" class="btn btn-contact">update</button>

  </form>
</div>
@stop