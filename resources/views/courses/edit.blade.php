@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Course</h1>
                <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="course_image">Course Image</label>
                        <input type="file" class="form-control" id="course_image" name="course_image">
                        @if ($course->course_image)
                            <img src="{{ asset('storage/' . $course->course_image) }}" alt="Course Image"
                                class="img-thumbnail mt-2" width="150">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required>{{ $course->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tag_id">Select Tag</label>
                        <select class="form-control" id="tag_id" name="tag_id" required>
                            <option value="">Select Tag</option>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" @if ($tag->id == $course->tag_id) selected @endif>
                                    {{ $tag->t_title }}
                                </option>
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
