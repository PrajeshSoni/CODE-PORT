@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Feedback</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Feedback ID</th>
                            <th>User name</th>
                            <th>Feedback</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($feedbacks as $feedback)
                            <tr>
                                <td>{{ $feedback->id }}</td>
                                <td>{{ $feedback->user_name }}</td>
                                <td>{{ $feedback->message }}</td>
                                <td>
                                    {{-- Edit Button --}}
                                    <a href="{{ route('feedback.edit', $feedback->id) }}" class="btn btn-primary">Edit</a>
                                    {{-- Delete Button --}}
                                    <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
