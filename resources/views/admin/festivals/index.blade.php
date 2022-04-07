@extends('admin.layout.app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .chapter-holder{

        border-radius: 10px;
        overflow: hidden
    }
    .chapter{
        position: relative;
    }
    .chapter>.overlay{
        position: absolute;
        top:0;left:0;right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.3);
    }
    .chapter>.overlay>.inner{
        position: absolute;
        color:white;
        left: 0;
        right: 0;
        bottom: 0;
        padding:15px 10px;



    }

    .chapter>.overlay>.inner>.text{
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;

    }
    .chapter>.overlay>.inner>.title{
        font-weight: 600;
        font-size: 25px;
    }
    .chapter img{
        width: 100%;
    }
</style>
@endsection

@section('s-title')
 Festivals
@endsection
@section('toolbar')
<a href="{{route('admin.festivals.add')}}" class="btn btn-primary">Add New</a>
@endsection
@section('content')
    <div class="row">
        @foreach ($festivals as $festival)
        <div class="col-md-4 mb-2">
            <div class="chapter-holder shadow bg-white">
                <div class="chapter " >
                    <img src="{{asset($festival->image)}}" alt="">
                    <div class="overlay">
                        <div class="inner">
                            <div class="title">
                                {{$festival->name}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <a href="{{route('admin.gallery.index',['type'=>3,'key'=>$festival->id])}}" class="btn btn-sm btn-primary">Manage Gallery</a>
                    <a href="{{route('admin.festivals.edit',['festival'=>$festival->id])}}" class="btn btn-sm btn-success">Edit</a>
                    <a href="{{route('admin.festivals.del',['festival'=>$festival->id])}}" class="btn btn-sm btn-danger" onclick="return prompt('Enter yes to delete')=='yes';">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


@endsection
@section('script')

@endsection
