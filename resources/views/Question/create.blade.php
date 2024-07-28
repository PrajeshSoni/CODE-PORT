@extends('layouts.layout')
@section('content')




    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
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



    <form method="POST" action="{{ route('question.store') }}">
        @csrf
        <div class="shadow p-3 mb-5 bg-white rounded">
            <div class="form-group">
                <p class="h2 text-center">Questions</p>

            </div>

            <div class="form-group">
                <label for="title">{{ __('messages.title') }}</label>
                <input type="title" class="form-control" id="title" placeholder="Enter title" name="q_title">
            </div>
            <div class="form-group">
                <label for="description">{{ __('messages.body') }}:</label>
                <textarea name="q_body" class="form-control" id="description" cols="10" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="title">{{ __('messages.tag') }}</label>
                <select name="t_id" class="form-control" style="width:350px">
                    <option value="">Select Tag</option>
                    @foreach ($Questions as $Questions)
                        <option value="{{ $Questions->id }}">{{ $Questions->t_title }}</option>
                    @endforeach

                </select>
            </div>



            <button type="submit" class="btn btn-default">{{ __('messages.submit') }}</button>
            <a href="{{ route('question.show') }}" class="btn btn-default">{{ __('messages.showdata') }}</a>

        </div>

    </form>

@stop
