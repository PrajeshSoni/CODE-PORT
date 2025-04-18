@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Edit Sub Course</h1>
                        <form action="{{ route('subcourse.update', $subcourse->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="" name="course_id" value="{{ $subcourse->course_id }}"hidden>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $subcourse->title }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $subcourse->description }}</textarea>
                            </div>
                            {{-- Add duration edit field --}}
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="time" class="form-control" id="duration" name="duration"
                                    value="{{ $subcourse->duration }}">
                            </div>
                            <div class="form-group">
                                <label for="document_url">Document URL</label>
                                <input type="text" class="form-control" id="document_url" name="document_url"
                                    value="{{ $subcourse->document_url }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
