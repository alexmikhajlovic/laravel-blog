@extends('layouts.app')

@section('title','Post')

@section('content')
    <div class="container">
        <div class="card m-2 bg-dark text-light shadow">
            <div class="card-header">
                <h1>{{$post->title}}</h1>
            </div>

            <div class="card-body text-center">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="text-center p-3">
                    <img src="{{ asset('storage/'.$post->cover) }}" alt="{{$post->title}}" style="max-height: 300px; border-radius: 5px;">
                </div>

                <p class="lead">{{ $post->content }}</p>

                <p class="mt-5 d-flex justify-content-between">
                    <small class="m-1"><i class="fas fa-user"></i> <em>{{$post->user->name}}</em></small>
                    <small class="m-1"><i class="far fa-calendar-alt"></i> {{$post->created_at}}</small>
                </p>

                <div class="card-footer text-center d-flex justify-content-around" style="font-size: 2rem;">
                    <a href=""><i class="fas fa-thumbs-up"></i></a>
                    <a href=""><i class="fas fa-comment"></i></a>
                    <a href=""><i class="fas fa-share"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection