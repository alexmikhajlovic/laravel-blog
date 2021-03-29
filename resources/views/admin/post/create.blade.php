@extends('layouts.adminlayout')

@section('title','Create Your Post')

@section('content')
    <div class="col-xs-8 p-3" style="width: 80%;">
        <div class="container text-light">

            <!-- Display of any errors -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
            <!-- +++ VERY IMPORTANT +++ -->
            @method('POST')
            @csrf
                <!-- Title -->
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="inputTitle" placeholder="Add title" name="title">
                </div>
                <!-- Cover -->
                <div class="mb-3">
                    <label for="inputCover" class="form-label">Image</label>
                    <input class="form-control form-control-sm" id="inputCover" type="file" name="image">
                </div>
                <!-- Content -->
                <div class="mb-3">
                    <label for="inputContent">Content</label>
                    <textarea class="form-control" id="inputContent" placeholder="Add content" name="content" style="height: 500px"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection