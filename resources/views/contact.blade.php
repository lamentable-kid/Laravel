@extends('layouts.app')

@section('title')
    Our contacts
@endsection

@section('content')
    <h1>Our contacts</h1>

    <form action="/contact/submit" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Your email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject of message</label>
            <input type="text" name="subject" placeholder="Subject of message" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message of message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message text"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Confirm</button>
    </form>
@endsection
