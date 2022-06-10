@extends('admin.layout.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <style>
        .dropify-wrapper .dropify-message span.file-icon{
            font-size: 22px;
        }
    </style>
@endsection

@section('s-title')
    <a href="{{ route('admin.hotels.index') }}">Hotels</a> / Add
@endsection

@section('content')
    <form action="{{ route('admin.hotels.add') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="image">Image (1980 X 1000)</label>
                        <input type="file" name="image" id="image" class="form-control image">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name </label>
                                    <input type="text" name="name" id="name"  class="form-control " required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="owner">Owner </label>
                                    <input type="text" name="owner" id="owner"  class="form-control " required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address </label>
                                    <input type="text" name="address" id="address"  class="form-control " required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">phone </label>
                                    <input type="text" name="phone" id="phone"  class="form-control " required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email </label>
                                    <input type="email" name="email" id="email"  class="form-control " required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook </label>
                                    <input type="text" name="facebook" id="facebook"  class="form-control " required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram">Instagram </label>
                                    <input type="text" name="instagram" id="instagram"  class="form-control " required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter">Twitter </label>
                                    <input type="text" name="twitter" id="twitter"  class="form-control " required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="amenities">Amenities </label>
                                    <input type="text" name="amenities" id="amenities"  class="form-control " >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_desc">Short Description </label>
                                    <textarea type="text" name="short_desc" id="short_desc"  class="form-control " ></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="desc"> Description </label>
                                    <textarea type="text" name="desc" id="desc"  class="form-control " ></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="shadow mb-3">
                                    <h4 class="d-flex justify-content-between align-items-center px-3 py-1">
                                        <span>
                                            Map
                                        </span>
                                        <input type="text" id="map" name="map" class="form-control w-25" placeholder="Search Place" required >
                                    </h4>
                                    <hr class="m-0">
                                    <div class="card-body d-flex justify-content-center" id="footer-4">
                                        <div style="width: 400px;">
                                            <div class="gmap_canvas">
                                                <iframe  id="gmap_canvas"
                                                src="" frameborder="0"
                                                scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-primary">Save Hotel</button>
                                    <a href="{{ route('admin.hotels.index') }}" class="btn btn-danger">Cancel</a>
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
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <script>
        const mapurl="https://maps.google.com/maps?q=xxx_map&t=&z=13&ie=UTF8&iwloc=&output=embed";

        $(document).ready(function() {
            $('.image').dropify();
            $('#desc').summernote();
            $('#map').keydown(function (e) {
                if(e.which==13){
                    e.preventDefault();
                    setMap(this.value);
                }
            });
            var tagify = new Tagify($('#amenities')[0]);

        });
        function setMap(params) {
            $('#gmap_canvas').attr('src',mapurl.replace('xxx_map',params));
        }
    </script>
@endsection
