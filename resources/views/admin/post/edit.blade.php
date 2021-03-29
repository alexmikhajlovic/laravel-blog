@extends('layouts.adminlayout')

@section('content')
    <div class="col-xs-8 p-3" style="width: 80%;">
        <div class="container text-light">
            <form method="post" action="{{ route('post.update',$selected_post->id) }}" enctype="multipart/form-data">
            <!-- +++ VERY IMPORTANT +++ -->
            @method('PUT')
            @csrf
                <!-- Title -->
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="inputTitle" name="title" value="{{ $selected_post->title }}">
                </div>
                <!-- Cover -->
                <div class="mb-3">
                    <label for="inputCover" class="form-label">Image</label>
                    <input class="form-control form-control-sm" id="inputCover" type="file" name="image">
                </div>
                <!-- Content -->
                <div class="mb-3">
                    <label for="inputContent">Content</label>
                    <textarea class="form-control" id="inputContent" name="content" style="height: 500px">{{ $selected_post->content }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection