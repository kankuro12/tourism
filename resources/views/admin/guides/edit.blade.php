@extends('admin.layout.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
    <style>
        .dropify-wrapper .dropify-message span.file-icon{
            font-size: 22px;
        }
    </style>
@endsection

@section('s-title')
    <a href="{{ route('admin.tourguide.index') }}">Tour Guides</a> / {{$guide->name}} / Edit
@endsection

@section('content')
    <form action="{{ route('admin.tourguide.edit',['guide'=>$guide->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <input type="file" name="image" id="image" class="form-control image" data-default-file="{{asset($guide->image)}}">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name </label>
                                    <input type="text" name="name" id="name"  class="form-control " required value="{{$guide->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address </label>
                                    <input type="text" name="address" id="address"  class="form-control " required value="{{$guide->address}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">phone </label>
                                    <input type="text" name="phone" id="phone"  class="form-control " required value="{{$guide->phone}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email </label>
                                    <input type="email" name="email" id="email"  class="form-control " required value="{{$guide->email}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook </label>
                                    <input type="text" name="facebook" id="facebook"  class="form-control " required value="{{$guide->facebook}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram">Instagram </label>
                                    <input type="text" name="instagram" id="instagram"  class="form-control " required value="{{$guide->instagram}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter">Twitter </label>
                                    <input type="text" name="twitter" id="twitter"  class="form-control " required value="{{$guide->twitter}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-primary">Save Tour Guide</button>
                                    <a href="{{ route('admin.tourguide.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
