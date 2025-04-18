@extends('layouts.layout')
@section('content')
    <div class="container">
        <h2>Create Subcourse</h2>
        <form action="{{ route('subcourses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="subcourse_name">Subcourse Name:</label>
                <input type="text" class="form-control" id="subcourse_name" placeholder="Enter subcourse name"
                    name="subcourse_name">
            </div>
            <div class="form-group">
                <label for="course_id">Course:</label>
                <select class="form-control" id="course_id" name="course_id">
                    <option value="">Select Courese</option>

                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" placeholder="Enter description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="text" class="form-control" id="duration" placeholder="Enter duration" name="duration"
                    required>
            </div>
            <div class="form-group">
                <label for="document_url">Document URL:</label>
                <input type="text" class="form-control" id="document_url" placeholder="Enter document URL"
                    name="document_url" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
