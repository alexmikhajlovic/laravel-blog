@extends('layouts.adminlayout')

@section('title','Create Your Post')

@section('content')
    <div class="col-xs-8 border p-3" style="width: 80%;">
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

            <form method="post" action="{{ route('post.store') }}">
            <!-- +++ VERY IMPORTANT +++ -->
            @method('POST')
            @csrf
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="inputTitle" placeholder="Add title" aria-describedby="emailHelp">
                </div>
                <div class="form-floating mb-3">
                    <label for="inputContent">Content</label>
                    <textarea class="form-control" id="inputContent" placeholder="Add content" style="height: 500px"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection