@extends('layouts.adminlayout')

@section('title', 'Dashboard')

@section('content')
    

        <!-- +++++ Logged successfully +++++ -->
        <div class="col-xs-8 p-3" style="width: 80%;">
            <div class="card bg-dark text-light border-success">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in, Alex!') }}
                </div>

                <div class="card-footer text-center"><i class="fas fa-tools"></i></div>
            </div>

            <!-- <div class="container-fluid d-flex justify-content-center flex-wrap">
                @foreach ($posts as $post)
                <div class="card m-3 bg-dark text-light shadow" style="width: 25rem;">
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

                        <p class="text-truncate">{{ $post->content }}</p>

                        <div class="card-footer text-center">
                            <a href="{{ route('guest.posts.show',$post->slug) }}" target="_blank" rel="noopener noreferrer" class="btn btn-info btn-sm">View more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> -->
        </div>
        
@endsection