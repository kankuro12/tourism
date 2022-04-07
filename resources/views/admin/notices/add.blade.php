@extends('admin.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
    <a href="{{ route('admin.notices.index') }}">Notices</a> / Add
@endsection

@section('content')
    <form action="{{ route('admin.notices.add') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" id="name"  class="form-control " required>
                </div>

                <div class="form-group">
                    <label for="image">Download</label>
                    <input type="file" name="image" id="image"  class="form-control image" required>
                </div>
                <div class="form-group">
                    <label for="desc">Short Description</label>
                    <textarea name="desc" id="desc" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Save Notice</button>
                    <a href="{{ route('admin.notices.index') }}" class="btn btn-danger">Cancel</a>
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
