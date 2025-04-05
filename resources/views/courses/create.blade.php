@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Course</h1>
                <a href="{{ route('courses.index') }}" class="btn btn-primary">Back</a>
                <hr>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="course_image">Course Image</label>
                        <input type="file" class="form-control" id="course_image" name="course_image">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Description"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tag_id">Select Tag</label>
                        <select class="form-control" id="tag_id" name="tag_id" required>
                            <option value="">Select Tag</option>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->t_title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
