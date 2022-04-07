@extends('admin.layout.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>

    </style>
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
    {{$types[$type]}} / {{$name}} / Gallery
@endsection

@section('content')
    <div class="bg-white shadow mb-3">
        <div class="card-body">
            <h4>
                Add New Media
            </h4>
            <hr>
            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="image-tab" data-toggle="tab" href="#image" role="tab"
                        aria-controls="image" aria-selected="true">Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video"
                        aria-selected="false">Video</a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active pt-3" id="image" role="tabpanel" aria-labelledby="image-tab">
                    <form action="" id="image-form">
                        @csrf
                        <input type="hidden" name="type" value="{{ $type }}">
                        <input type="hidden" name="key" value="{{ $key }}">
                        <input type="hidden" name="media" value="1">
                        <input type="file" class="form-control image" accept="image/*" name="image"><br>

                        <button class="btn btn-primary" id="add-image">Add Media</button>
                    </form>
                </div>
                <div class="tab-pane pt-3" id="video" role="tabpanel" aria-labelledby="video-tab">
                    <form action="" id="video-form">
                        @csrf
                        <input type="hidden" name="type" value="{{ $type }}">
                        <input type="hidden" name="key" value="{{ $key }}">
                        <input type="hidden" name="media" value="2">
                        <input type="hidden" name="image" id="video-image">
                        <input type="url" class="form-control " placeholder="Enter Youtube Url" onchange="GetMedia(this)">
                        <div id="video-preview-panel" style="display: none;">

                            <hr>
                            <div class="row">
                                <div class="col-3">
                                    <img class="w-100" id="video-image-preview" alt="">
                                </div>
                                <div class="col-3">
                                    <iframe id="video-video-preview"  class="w-100 h-100" frameborder="0"></iframe>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary" id="add-video">Add Media</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-white shadow mb-3">
        <div class="card-body">
            <div class="row" id="images">

            </div>
        </div>
    </div>
    @include('admin.images.template')
    <!-- Tab panes -->
@endsection
@section('script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('back/vendor/drophify/js/dropify.min.js') }}"></script>
    <script>
        var video_template="";
        var image_template="";
        var images={!! json_encode($images) !!};
        const asset="{{asset('')}}";
        $(document).ready(function() {
            video_template=$('#video-template').html()
            image_template=$('#image-template').html()
            $('.image').dropify();
            $('#video-form').submit(function (e) {
                e.preventDefault();
                var data=new FormData(this);
                axios.post('{{route('admin.gallery.add')}}',data)
                .then((res)=>{
                    renderVideo(res.data);
                    toastr.success("Media Added sucessfully");
                    this.reset();
                    $('#video-preview-panel').hide();
                })
            });
            $('#image-form').submit(function (e) {
                e.preventDefault();
                var data=new FormData(this);
                axios.post('{{route('admin.gallery.add')}}',data)
                .then((res)=>{
                    renderImage(res.data);
                    toastr.success("Media Added sucessfully");

                    this.reset();

                })
            });
            images.forEach(image => {
                if(image.media==1){
                    renderImage(image);
                }else{
                    renderVideo(image);
                }
            });
        });

        function renderVideo($image){
            html=video_template;
            html=html.replaceAll('xxx_id',$image.id);
            html=html.replaceAll('xxx_image',"https://i.ytimg.com/vi/"+$image.image+"/0.jpg")
            html=html.replaceAll('xxx_preview',"https://www.youtube.com/embed/"+$image.image)
            $('#images').prepend(html);
        }
        function renderImage($image){
            html=image_template;
            html=html.replaceAll('xxx_id',$image.id);
            html=html.replaceAll('xxx_image',asset+$image.image)
            $('#images').prepend(html);

        }

        function GetMedia(ele){
            const _url=ele.value;
            try {
                if(_url!=''){
                    const url=new URL(_url);
                    const urlParams = url.searchParams.get('v');
                    console.log(urlParams);
                    if(urlParams!=null){
                        $('#video-image').val(urlParams);
                        $('#video-image-preview')[0].src="https://i.ytimg.com/vi/"+urlParams+"/0.jpg";
                        $('#video-video-preview')[0].src="https://www.youtube.com/embed/"+urlParams;
                        $('#video-preview-panel').show();
                        return;
                    }
                }

            } catch (error) {
                console.log(error);
            }

            $('#video-preview-panel').hide();

        }

        function delImage(id){
            if(confirm("Do you want to delete media?")){
                axios.post('{{route('admin.gallery.del')}}',{id:id})
                .then((res)=>{
                    $('#media-'+id).remove();
                    toastr.success("Media deleted sucessfully");
                })
                .catch((err)=>{
                    toastr.error("Media cannot be deleted now please try again.");
                })
            }
        }

    </script>
@endsection
