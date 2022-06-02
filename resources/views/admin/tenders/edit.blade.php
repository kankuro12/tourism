@extends('admin.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
    <a href="{{ route('admin.tenders.index') }}">Tenders</a> / Edit
@endsection

@section('content')
    <form action="{{ route('admin.tenders.edit',['tender'=>$tender->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <div class="form-group">
                    <label for="title">Title </label>
                    <input type="text" name="title" id="title"  class="form-control " required value="{{$tender->title}}">
                </div>
                <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" name="file" id="file"  class="form-control image"  data-default-file={{asset($tender->file)}}>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Save Tender</button>
                    <a href="{{ route('admin.tenders.index') }}" class="btn btn-danger">Cancel</a>
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
