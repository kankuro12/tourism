@extends('admin.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/vendor/drophify/css/dropify.min.css') }}">
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: 16px;
        }

    </style>
@endsection

@section('s-title')
    <a href="{{ route('admin.chapters.index') }}">Chapters</a> / map
@endsection

@section('content')

    <form action="{{ route('admin.chapters.map') }}" enctype="multipart/form-data" method="post">
        @csrf
        @for ($i = 1; $i < 9; $i++)
            @php
                $data = $datas['chapter_' . $i];
            @endphp
            <div class="bg-white shadow mb-3">
                <div class="card-body">
                    <h5>
                        Position {{ $i }}
                    </h5>
                    <hr class="mt-0 mb-1">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title_{{ $i }}">Title </label>
                                <input type="text" name="title_{{ $i }}" id="title_{{ $i }}"
                                    class="form-control" value="{{ $data->title }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_{{ $i }}">Chapter </label>
                                <select type="text" name="id_{{ $i }}" id="id_{{ $i }}"
                                    class="form-control">
                                    @foreach ($chapters as $chapter)
                                        <option {{ $data->id == $chapter->id ? 'selected' : '' }} value="{{ $chapter->id }}">
                                            {{ $chapter->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="desktop_image_{{ $i }}">Desktop Image ({{ $imgarr[$i - 1] }})</label>
                                <input type="file"
                                    @if ($data->desktop_image != '') data-default-file="{{ asset($data->desktop_image) }}" @endif
                                    name="desktop_image_{{ $i }}" id="desktop_image_{{ $i }}"
                                    accept="image/*" class="form-control image">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile_image_{{ $i }}">Mobile Image (200px X 200px)</label>
                                <input type="file"
                                    @if ($data->mobile_image != '') data-default-file="{{ asset($data->mobile_image) }}" @endif
                                    name="mobile_image_{{ $i }}" id="mobile_image_{{ $i }}"
                                    accept="image/*" class="form-control image">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="logo_{{ $i }}">Logo (70px X 70px)</label>
                                <input type="file"
                                    @if ($data->logo != '') data-default-file="{{ asset($data->logo) }}" @endif
                                    name="logo_{{ $i }}" id="logo_{{ $i }}" accept="image/*"
                                    class="form-control image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
        <div class="bg-white shadow mb-3">
            <div class="card-body">
                <button class="btn btn-primary">Save</button>
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
