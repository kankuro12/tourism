@extends('admin.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
    <style>
        .row>div {
            padding-bottom: 10px;
        }

        .others .dropify-wrapper {
            height: 100px;
        }
    </style>
@endsection
@section('s-title')
    Settings / Contact
@endsection
@section('content')
    <form action="{{ route('admin.setting.contact') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <h4 class="d-flex justify-content-between align-items-center px-3 py-1">
                    <span>
                        Map
                    </span>
                    <input type="text" id="map" name="map" class="form-control w-25" placeholder="Search Place"
                        value="{{ $data->map }}">
                </h4>
                <hr class="m-0">
                <div class="card-body d-flex justify-content-center" id="footer-4">
                    <div style="width: 400px;">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas" src="" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-6">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" value="{{ $data->phone }}">
            </div>
            <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $data->email }}">
            </div>
            <div class="col-md-12">
                <label for="addr">Address</label>
                <textarea name="addr" id="addr" class="form-control desc" required>{!! $data->addr !!}</textarea>
            </div>
            <div class="col-12 py-3">
                <div class="shadow">
                    <h5 class="p-2 d-flex justify-content-between align-items-center">
                        <span>
                            Individual Detail
                        </span>
                        <button class="btn btn-success" id="addOther">
                            Add New
                        </button>
                    </h5>
                    <hr class="m-0">

                    <div class="p-2">
                        <div class="row">
                            <div class="col-md-3 pr-0 ">
                                <strong>Name</strong>
                            </div>
                            <div class="col-md-3 p-0">
                                <strong>Desination</strong>
                            </div>
                            <div class="col-md-2 p-0">
                                <strong>Phone</strong>
                            </div>
                            <div class="col-md-2 p-0">
                                <strong>Email</strong>
                            </div>
                            <div class="col-md-2 pl-0">
                                <strong>Image</strong>
                            </div>
                        </div>
                        <div id="others" class="others">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 py-3">
                <div class="shadow">
                    <label for="slider_image">Slider Image (1920 X 1000)</label>
                    <input type="file" name="slider_image" id="slider_image" accept="image/*" class="form-control image"
                        {{ $data->slider_image == '' ? 'required' : '' }} data-default-file="{{ asset($data->slider_image) }}">
                </div>
            </div>
            <div class="col-12 py-3">
                <div class="shadow">
                    <label for="map_bg">Map Background (1920 X 1000)</label>
                    <input type="file" name="map_bg" id="map_bg" accept="image/*" class="form-control image"
                        {{ $data->map_bg == '' ? 'required' : '' }} data-default-file="{{ asset($data->map_bg) }}">
                </div>
            </div>
            <div class="col-12 py-3">
                <div class="shadow">
                    <h5 class="p-2 d-flex justify-content-between align-items-center">
                        <span>
                            Contact form section
                        </span>
                    </h5>
                    <hr class="m-0">

                    <div class="p-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Title</label>
                                <input type="text" name="contact_title" id="contact_title" class="form-control"
                                    value="{{ $data->contact_title }}">
                            </div>
                            <div class="col-md-6">
                                <label>Sub Title</label>
                                <input type="text" name="contact_subtitle" id="contact_subtitle" class="form-control"
                                    value="{{ $data->contact_subtitle }}">
                            </div>
                            <div class="col-12 ">

                                <label for="contact_bg">Background(1920 X 1000)</label>
                                <input type="file" name="contact_bg" id="contact_bg" accept="image/*"
                                    class="form-control image" {{ $data->contact_bg == '' ? 'required' : '' }}
                                    data-default-file="{{ asset($data->contact_bg) }}">

                            </div>

                            <div class="col-12 ">

                                <label for="contact_image">Image(870 X 550)</label>
                                <input type="file" name="contact_image" id="contact_image" accept="image/*"
                                    class="form-control image" {{ $data->contact_image == '' ? 'required' : '' }}
                                    data-default-file="{{ asset($data->contact_image) }}">

                            </div>
                        </div>

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

    <span id="others-template" class="d-none">
        <hr class="my-2">

        <div class="row" id="other-xxx_id">
            <input type="hidden" name="others[]" value="xxx_id">
            <div class="col-md-3 pr-0">
                <input type="text" value="xxx_name" name="name_xxx_id" id="name_xxx_id" class="form-control"
                    required>
                <button class="btn btn-danger mt-2" onclick="delOther(xxx_id)">Delete</button>

            </div>
            <div class="col-md-3 p-0">
                <input type="text" value="xxx_desination" name="designation_xxx_id" id="designation_xxx_id"
                    class="form-control" required>
            </div>
            <div class="col-md-2 p-0">
                <input type="text" value="xxx_phone" name="phone_xxx_id" id="phone_xxx_id" class="form-control">
            </div>
            <div class="col-md-2 p-0">
                <input type="email" value="xxx_email" name="email_xxx_id" id="email_xxx_id" class="form-control">
            </div>
            <div class="col-md-2 pl-0">
                <input type="file" name="image_xxx_id" id="image_xxx_id" class="form-control image1"
                    data-default-file="xxx_file">
                    <input type="hidden" name="old_image_xxx_id" id="old_image_xxx_id" value="xxx_old_image">
            </div>

        </div>
    </span>
@endsection
@section('script')
    <script src="{{ asset('back/vendor/drophify/js/dropify.min.js') }}"></script>
    <script>
        const mapurl = "https://maps.google.com/maps?q=xxx_map&t=&z=13&ie=UTF8&iwloc=&output=embed";
        const _template = $('#others-template').html();
        const others = {!! json_encode($data->others) !!}
        const url="{{url('')}}/";
        function setMap(params) {
            $('#gmap_canvas').attr('src', mapurl.replace('xxx_map', params));
        }
        i = 0;

        function addOther() {
            let temp = _template.replaceAll('xxx_id', i);
            temp = temp.replaceAll('xxx_name', '');
            temp = temp.replaceAll('xxx_phone', '');
            temp = temp.replaceAll('xxx_email', '');
            temp = temp.replaceAll('xxx_desination', '');
            temp = temp.replaceAll('xxx_file', '');
            temp = temp.replaceAll('xxx_old_image', '');
            $('#others').append(temp);
            $('#image_' + i).dropify({
                messages: {
                    'default': '',
                }
            });
            i += 1;
        }

        function delOther(id) {
            $('#other-' + id).remove();
        }
        $(function() {
            $('#others-template').remove();

            $('#addOther').click(function(e) {
                e.preventDefault();
                addOther();
            });
            $('#map').keydown(function(e) {
                if (e.which == 13) {
                    e.preventDefault();
                    setMap(this.value);
                }
            });
            others.forEach(other => {
                let temp = _template.replaceAll('xxx_id', i);
                temp = temp.replaceAll('xxx_name', other.name);
                temp = temp.replaceAll('xxx_phone', other.phone);
                temp = temp.replaceAll('xxx_email', other.email);
                temp = temp.replaceAll('xxx_desination', other.designation);
                if(other.image!=undefined){
                    temp = temp.replaceAll('xxx_file', url+other.image);
                    temp = temp.replaceAll('xxx_old_image', other.image);
                }else{
                    temp = temp.replaceAll('xxx_file', "");
                    temp = temp.replaceAll('xxx_old_image', "");

                }
                $('#others').append(temp);
                i += 1;
            });
            setMap('{{ $data->map }}');
            $('.image').dropify();
            $('.image1').dropify({
                messages: {
                'default': '',
            }});
        });
    </script>
@endsection
