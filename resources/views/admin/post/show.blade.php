@extends('layouts.adminlayout')

@section('content')
    
    <div class="col-xs-8 p-4 text-light text-center" style="width: 80%;">
        <h1>{{$selected_post->title}}</h1>

        <p class="lead mb-5">{{$selected_post->content}}</p>

        <div class="d-flex justify-content-around">
            <p><span>{{$selected_post->user->name}}</span> - <span>{{$selected_post->user->email}}</span></p>
            <p>{{$selected_post->created_at}}</p>
        </div>
    </div>
@endsection