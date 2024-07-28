@extends('layouts.layout')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{$message}}</p>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif


<form method="POST" action="{{route('tag.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <p class="h2 text-center">{{ __('messages.tag') }}</p>

  </div>

  <div class="form-group">
    <label for="title">{{ __('messages.title') }}</label>
    <input type="title" class="form-control" id="title" placeholder="Enter title" name="t_title">
  </div>
  <div class="form-group">
    <label for="description">{{ __('messages.description') }}:</label>
    <textarea name="t_des" class="form-control" id="description" cols="10" rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="icon">{{ __('messages.icon') }}:</label>

    <input type="File" class="form-control" id="File" placeholder="Select File" name="t_icon">
  </div>



  <button type="submit" class="btn btn-contact">{{ __('messages.submit') }}</button>
  <a href=" {{route('tag.index') }}" class="btn btn-contact">{{ __('messages.showdata') }}</a>


</form>
</div>


@stop