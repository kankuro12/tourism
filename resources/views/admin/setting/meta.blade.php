@extends('admin.layout.app')
@section('css')
<style>
    .row>div{
        padding-bottom: 10px;
    }
    label{
        text-transform: capitalize;
    }
</style>
@endsection
@section('s-title')
Settings / Meta
@endsection
@section('content')

    <form action="{{route('admin.setting.meta')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow mb-3">
            <div class="card-body">

                <h4>
                    Meta Setting
                </h4>
                <hr>
                @foreach ((array)$data as $key=>$item)
                    <div>
                        <label for="{{$key}}">{{$key}}</label>
                    </div>
                    <textarea name="{{$key}}" id="{{$key}}" class="form-control">{{$item}}</textarea>
                @endforeach

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

@endsection

