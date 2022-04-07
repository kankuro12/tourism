@extends('admin.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
    <a href="{{ route('admin.gallery.main.index') }}">Galleries</a> / {{$gallery->name}} / Edit
@endsection

@section('content')
    <form action="{{ route('admin.gallery.main.edit',['gallery'=>$gallery->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" id="name"  class="form-control " required value="{{$gallery->name}}">
                </div>
                <div class="form-group">
                    <label for="image">Image (1980 X 1000)</label>
                    <input type="file" name="image" id="image" accept="image/*" class="form-control image" required data-default-file="{{asset($gallery->image)}}">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Save Gallery</button>
                    <a href="{{ route('admin.gallery.main.index') }}" class="btn btn-danger">Cancel</a>
                </div>
            </div>

        </div>
    </form>
@endsection
@section('script')
    <script src="{{ asset('back/vendor/drophify/js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.image').dropify();
        });
    </script>
@endsection
