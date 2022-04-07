@extends('admin.layout.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
    <a href="{{ route('admin.festivals.index') }}">Festivals</a> / {{$festival->name}} / Edit
@endsection

@section('content')
    <form action="{{ route('admin.festivals.edit',['festival'=>$festival->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" id="name"  class="form-control " required value="{{$festival->name}}">
                </div>
                <div class="form-group">
                    <label for="image">Image (1980 X 1000)</label>
                    <input type="file" name="image" id="image" accept="image/*" class="form-control image"  data-default-file="{{asset($festival->image)}}">
                </div>
                <div class="form-group">
                    <label for="short_desc">Short Description</label>
                    <textarea name="short_desc" id="short_desc" class="form-control" required>{{$festival->short_desc}}</textarea>
                </div>
                <div class="form-group">
                    <label for="desc">Full Description</label>
                    <textarea name="desc" id="desc" class="form-control">{{$festival->desc}}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Save Festival</button>
                    <a href="{{ route('admin.festivals.index') }}" class="btn btn-danger">Cancel</a>
                </div>
            </div>

        </div>
    </form>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('back/vendor/drophify/js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.image').dropify();
            $('#desc').summernote();
        });
    </script>
@endsection
