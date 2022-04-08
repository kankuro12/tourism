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
Settings / Footer
@endsection
@section('content')

    <form action="{{route('admin.setting.footer')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <h4>
                    Footer Setting
                </h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label for="twitter"> Twitter Link</label>
                        <input type="text" name="twitter" id="twitter" class="form-control"  value="{{$data->twitter}}">
                    </div>
                    <div class="col-md-6">
                        <label for="insta"> Instagram Link</label>
                        <input type="text" name="insta" id="insta" class="form-control"  value="{{$data->insta}}">
                    </div>
                    <div class="col-md-6">
                        <label for="fb"> Facebook Link</label>
                        <input type="text" name="fb" id="fb" class="form-control"  value="{{$data->fb}}">
                    </div>
                    <div class="col-md-6">
                        <label for="email"> Email</label>
                        <input type="email" name="email" id="email" class="form-control" required value="{{$data->email}}">
                    </div>
                    <div class="col-md-6">
                        <label for="address"> Address</label>
                        <input type="text" name="address" id="address" class="form-control" required value="{{$data->address}}">
                    </div>
                    <div class="col-md-6">
                        <label for="phone"> Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" required value="{{$data->phone}}">
                    </div>
                    <div class="col-md-6">
                        <label for="sub_title">Subscribe Title</label>
                        <input type="text" name="sub_title" id="sub_title" class="form-control" required value="{{$data->sub_title}}">
                    </div>
                    <div class="col-md-6">
                        <label for="sub_subtitle">Subscribe Subtitle</label>
                        <input type="text" name="sub_subtitle" id="sub_subtitle" class="form-control" required value="{{$data->sub_subtitle}}">
                    </div>
                    <div class="col-12">
                        <label for="bg">Backgound (1920 x 1200)</label>
                        <input type="file" name="bg" id="bg" class="image" {{$data->bg==''?'required':''}} data-default-file="{{asset($data->bg)}}">
                    </div>
                    <div class="col-12">
                        <label for="logo">logo </label>
                        <input type="file" name="logo" id="logo" class="image" {{$data->logo==''?'required':''}} data-default-file="{{asset($data->logo)}}">
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

