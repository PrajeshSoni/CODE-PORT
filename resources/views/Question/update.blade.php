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

  <form method="POST" action="{{route('question.update') }}">
    @csrf
    <div class="shadow p-3 mb-5 bg-white rounded">
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('question.show') }}"> Back</a>
      </div>
      <h2>Edit Page</h2>

      <div class="form-group">
        <input type="hidden" class="form-control" name="id" value="{{$Questions->id }}">
      </div>
      <div class="form-group">
        <label for="Title">{{ __('messages.title') }}:</label>
        <input type="Title" class="form-control" id="name" name="q_title" value="{{$Questions->q_title}}">
      </div>
      <div class="form-group">
        <label for="text">{{ __('messages.body') }}:</label>
        <textarea name="q_body" class="form-control" id="textarea" cols="10" rows="2" value="{{$Questions->q_body}}"></textarea>
      </div>
      <div class="form-group">
        <label for="title">{{ __('messages.tag') }}</label>

        <select name="t_id" class="form-control" style="width:350px">
          <option value="">Select Tag</option>
          @foreach($Ques as $Ques)
          <option value="{{$Ques->id}}">{{$Ques->t_title}}</option>
          @endforeach

        </select>

        </select>
      </div>
      <button type="submit" class="btn btn-default">{{ __('messages.Edit') }}</button>
    </div>
  </form>
</div>
@stop