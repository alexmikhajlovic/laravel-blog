@extends('layouts.adminlayout')

@section('content')
    <div class="col-xs-8 border p-3" style="width: 80%;">
        <p class="text-center"><a href="{{route('post.create') }}"><i class="fas fa-plus"></i></a></p>
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col"><i class="fas fa-hashtag"></i></th>
                    <th scope="col"><i class="fas fa-user"></i></th>
                    <th scope="col">Title</th>
                    <th scope="col"><i class="far fa-calendar-alt"></i></th>
                    <th scope="col"><i class="fas fa-tools"></i></th>
                </tr>
            </thead>
            @foreach ($posts as $post)
            <tbody>
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn text-primary"><i class="fas fa-info-circle"></i></a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn text-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn text-danger"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection