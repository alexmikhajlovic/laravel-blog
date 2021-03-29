@extends('layouts.app')

@section('title','Contact Us')

@section('content')
    <div class="container text-light">
        <form method="post" action="{{route('guest.contact.sent')}}">
        <!-- +++ VERY IMPORTANT +++ -->
        @method('POST')
        @csrf

            @if (session('status') == 'confirmed')
                <div class="alert alert-success" role="alert">
                    <p>Messaggio inviato correttamente.</p>
                </div>
            @endif

            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="full_name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
                <div id="emailHelp" class="form-text"><small>We'll never share your email with anyone else.</small></div>
            </div>

            <div class="form-floating mb-3">
                <label for="message">Message</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="message" name="message" style="height: 150px"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection