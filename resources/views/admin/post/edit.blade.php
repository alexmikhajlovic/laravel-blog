@extends('layouts.adminlayout')

@section('content')
    <div class="col-xs-8 border p-3" style="width: 80%;">
        <div class="container text-light">
            <form>
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="inputTitle" aria-describedby="emailHelp">
                </div>
                <div class="form-floating mb-3">
                    <label for="inputContent">Content</label>
                    <textarea class="form-control" id="inputContent" style="height: 500px"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection