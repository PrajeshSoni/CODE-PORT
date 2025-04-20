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
    <section class="w3l-contact-main w3l-contact3">
        <div class="contact-form py-5">
            <div class="container py-lg-5">
                <div class="contacts12-main">
                    <h3 class="hny-title text-center">Feedback Form
                    </h3>
                    <form class="f-hnyv mt-md-5 mt-4" action="{{ route('feedback.store') }}" method="POST">
                        @csrf
                        <div class="main-input">
                            <div>
                                <label class="field-info">Name <span class="compulsary">*</span></label>
                                <input type="text" name="f_name" id="w3lName" placeholder="Your Name"
                                    class="contact-input" />
                            </div>
                        </div>
                        <label class="field-info">Message <span class="compulsary">*</span></label>
                        <textarea class="contact-textarea" name="message" id="w3lMessage" placeholder="Type your message here" required></textarea>
                        <div class="text-right">
                            <button class="btn btn-contact">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
