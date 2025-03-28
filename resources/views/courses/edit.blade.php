@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Course</h1>
                <form action="{{ route('courses.update', $course->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}">
                    </div>
                    <div class="form-group
                    ">
                        <label for="tag_id">Select Tag</label>
                        <select class="form-control" id="tag_id" name="tag_id">
                            <option value="">select Tag </option>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" @if ($tag->id == $course->tag_id) selected @endif>
                                    {{ $tag->t_title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
