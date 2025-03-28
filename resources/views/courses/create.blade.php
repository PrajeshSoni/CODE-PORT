@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Course</h1>
                <form action="{{ route('courses.store') }}" method="POST">
                    @csrf
                    <div class="form-group ">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="tag_id">Select Tag</label>
                        <select class="form-control" id="tag_id" name="tag_id">
                            <option value="">select Tag </option>
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
