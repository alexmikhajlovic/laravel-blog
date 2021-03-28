@extends('layouts.adminlayout')

@section('title', 'Your Posts')

@section('content')
    <div class="col-xs-8 p-3" style="width: 80%;">

        <!-- Add new post button -->
        <p class="text-center" style="font-size: 1.3rem;"><a href="{{route('post.create') }}"><i class="fas fa-plus"></i></a></p>

        <!-- Posts list -->
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col"><i class="fas fa-hashtag"></i></th>
                    <th scope="col"><i class="fas fa-user"></i></th>
                    <th scope="col"><i class="far fa-file-alt"></i></th>
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
                        <!-- Info -->
                        <a href="{{ route('post.show', $post->id) }}" class="btn text-primary"><i class="fas fa-info-circle"></i></a>

                        <!-- Edit -->
                        <a href="{{ route('post.edit', $post->id) }}" class="btn text-warning"><i class="far fa-edit"></i></a>

                        <!-- Delete -->
                        <form action="{{route('post.destroy', [$post->id])}}" method="post" class="d-inline-block form-delete">
                        <!-- +++ VERY IMPORTANT +++ -->
                        @method('DELETE')
                        @csrf
                            <button class="btn"><a href="http://#" target="_blank" rel="noopener noreferrer" class="text-danger"><i class="far fa-trash-alt"></i></a></button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        
    </div>
@endsection