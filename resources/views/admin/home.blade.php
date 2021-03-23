@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <!-- +++++ Logged successfully +++++ -->
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->

            <h1 class="text-light text-uppercase text-center">Your posts</h1>
            @foreach ($posts as $post)
                <div class="card m-2 bg-dark text-light border-primary pointer">
                    <div class="card-header">{{$post->id}} - {{$post->title}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ $post->content }}

                        <p class="mt-5 d-flex justify-content-around">
                            <small class="m-1"><i class="fas fa-user"></i> <em>{{ Auth::user()->name }}</em></small>
                            <small class="m-1"><i class="far fa-calendar-alt"></i> {{$post->created_at}}</small>
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
