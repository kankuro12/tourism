@extends('admin.layout.app')
@section('css')
<link rel="stylesheet" href="{{asset('back/vendor/drophify/css/dropify.min.css')}}">
<style>
    .row>div{
        padding-bottom: 10px;
    }
</style>
@endsection
@section('s-title')
Settings / Home
@endsection
@section('content')

    <form action="{{route('admin.setting.homepage')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <h4>
                    Slider Setting
                </h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label for="slider_title"> Title</label>
                        <input type="text" name="slider_title" id="slider_title" class="form-control" required value="{{$data->slider_title}}">
                    </div>
                    <div class="col-md-6">
                        <label for="slider_subtitle">Subtitle</label>
                        <input type="text" name="slider_subtitle" id="slider_subtitle" class="form-control" required value="{{$data->slider_subtitle}}">
                    </div>
                    <div class="col-12">
                        <label for="slider_image">Image (1920 x 1200)</label>
                        <input type="file" name="slider_image" id="slider_image" class="image" {{($data->slider_image??'')==''?'required':''}}  data-default-file="{{asset($data->slider_image??'')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <h4>
                    Chapter Setting
                </h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label for="chapter_title"> Title</label>
                        <input type="text" name="chapter_title" id="chapter_title" class="form-control" required value="{{$data->chapter_title??''}}">
                    </div>
                    <div class="col-md-6">
                        <label for="chapter_subtitle">Subtitle</label>
                        <input type="text" name="chapter_subtitle" id="chapter_subtitle" class="form-control" required value="{{$data->chapter_subtitle??''}}">
                    </div>

                </div>
            </div>
        </div>
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <h4>
                    Expeirence Setting
                </h4>
                <hr>
                <div class="row">

                    <div class="col-12">
                        <label for="exp_image">Image (1920 x 1200)</label>
                        <input type="file" name="exp_image" id="exp_image" class="image"  {{($data->exp_image??'')==''?'required':''}}  data-default-file="{{asset($data->exp_image??'')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <h4>
                    Festival Setting
                </h4>
                <hr>
                <div class="row">

                    <div class="col-12">
                        <label for="festival_image">Image (1920 x 1000)</label>
                        <input type="file" name="festival_image" id="festival_image" class="image" {{($data->festival_image??'')==''?'required':''}}  data-default-file="{{asset($data->festival_image??'')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <h4>
                    Explore Setting
                </h4>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <label for="explore_title"> Title</label>
                        <input type="text" name="explore_title" id="explore_title" class="form-control" required value="{{$data->explore_title}}">
                    </div>
                    <div class="col-md-9">
                        <label for="explore_video"> Video Url (Embed from youtube)</label>
                        <input type="url" name="explore_video" id="explore_video" class="form-control" required value="{{$data->explore_video}}">
                    </div>
                    <div class="col-3">
                        <label for="explore_image">Image (620 x 410)</label>
                        <input type="file" name="explore_image" id="explore_image" class="image"  {{($data->explore_image??'')==''?'required':''}}  data-default-file="{{asset($data->explore_image??'')}}">
                    </div>
                    <div class="col-9">
                        <label for="explore_bg">Background (1920 x 1000)</label>
                        <input type="file" name="explore_bg" id="explore_bg" class="image" {{($data->explore_bg??'')==''?'required':''}}  data-default-file="{{asset($data->explore_bg??'')}}">
                    </div>

                    <div class="col-md-12">
                        <label for="explore_text">Text</label>
                        <textarea name="explore_text" id="explore_text" class="form-control">{{$data->explore_text}}</textarea>

                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white shadow mb-3">
            <div class="card-body">
                <button class="btn btn-primary">Save</button>
            </div>
        </div>

    </form>
@endsection
@section('script')
    <script src="{{asset('back/vendor/drophify/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.image').dropify();
        });
    </script>
@endsection

