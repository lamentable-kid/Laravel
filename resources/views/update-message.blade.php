@extends('layouts.app')

@section('title')
    Editing the message
@endsection

@section('content')
    <h1>Editing the message</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Your email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject of message</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Subject of message" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message of message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message text">{{ $data->message }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection
