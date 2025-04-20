@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Edit Feedback</h1>
                <form action="{{ route('feedback.update', $feedback->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="f_name">Feedback Name</label>
                        <input type="text" class="form-control" id="f_name" name="f_name"
                            value="{{ $feedback->f_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required>{{ $feedback->message }}</textarea>
                    </div>
                    {{-- user name --}}
                    <input type="hidden" name="user_id" value="{{ $feedback->user_id }}">
                    {{-- Submit Button --}}
                    <button type="submit" class="btn btn-primary">Update Feedback</button>
                    <a href="{{ route('feedback.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
