@extends('layouts.app')

@section('title', 'Discover Our Posts')

@section('content')

    <h1 class="text-light text-center">Our posts</h1>
    <div class="container-fluid d-flex justify-content-center flex-wrap">
        @foreach ($posts as $post)
            <div class="card m-3 bg-dark text-light shadow" style="width: 30rem;">
                <div class="card-header">
                    <div class="mb-2 d-flex justify-content-between">
                        <small class="m-1"><i class="fas fa-user"></i> {{$post->user->name}}</small>
                        <small class="m-1"><i class="far fa-calendar-alt"></i> {{$post->created_at}}</small>
                    </div>
                    
                    <h3 class="text-truncate">{{$post->title}}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center"><img src="{{ asset('storage/'.$post->cover) }}" alt="{{$post->title}}" style="height: 200px; border-radius: 7px;"></div>

                    <p class="text-truncate p-2">{{ $post->content }}</p>

                    <div class="card-footer text-center">
                        <a href="{{ route('guest.posts.show',$post->slug) }}" target="_blank" rel="noopener noreferrer" class="btn btn-info btn-sm">View more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    
@endsection