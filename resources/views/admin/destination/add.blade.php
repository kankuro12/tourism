@extends('admin.layout.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
    <a href="{{ route('admin.destination.index',['type'=>$type->id]) }}">Destinations - {{$type->name}}</a> / Add
@endsection

@section('content')
    <form action="{{ route('admin.destination.add',['type'=>$type->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" id="name"  class="form-control " required>
                </div>
                <div class="form-group">
                    <label for="image">Image (1980 X 1000)</label>
                    <input type="file" name="image" id="image" accept="image/*" class="form-control image" required>
                </div>

                <div class="form-group">
                    <label for="desc">Full Description</label>
                    <textarea name="desc" id="desc" class="form-control"></textarea>
                </div>

                <div>
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
                <div class="form-group">
                    <button class="btn btn-primary">Save Destination</button>
                    <a href="{{ route('admin.destination.index',['type'=>$type->id]) }}" class="btn btn-danger">Cancel</a>
                </div>
            </div>

        </div>
    </form>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('back/vendor/drophify/js/dropify.min.js') }}"></script>
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
            function setMap(params) {
                $('#gmap_canvas').attr('src',mapurl.replace('xxx_map',params));
            }
        });
    </script>
@endsection
