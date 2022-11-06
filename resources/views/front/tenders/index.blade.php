@extends('front.layout.app')
@section('css')
@endsection
@section('title')
    Tenders
@endsection
@section('meta')
<meta name="description" content="{{App\SM::getMeta('tenders')}}">
@endsection
@section('content')
<section class="page-banner blog-detail" style="background-image: url({{asset($data->slider_image)}})">
    <div class="container">
        <div class="page-title-wrapper">
            <div class="page-title-content">
                <ol class="breadcrumb">
                    <li>
                        <a href="/" class="link home">Home</a>
                    </li>

                    <li class="active">
                        <a href="#" class="link">Tenders</a>
                    </li>
                </ol>
                <div class="clearfix"></div>
                <h1  style="margin-bottom:20px;">Tenders</h1>
            </div>
        </div>
    </div>
</section>
<section class="page-main padding-top padding-bottom">
    <div class="container">
       <table class="table">
           <tr>
               <th>
                   Title
               </th>
               <th>
                   Downloads
               </th>
               <th>
                   Published
               </th>

           </tr>
           @foreach ($tenders as $tender)
               <tr>
                   <th >
                       {{$tender->title}}
                   </th>
                   <td>
                       <a download="{{$tender->title}}.{{pathinfo($tender->file, PATHINFO_EXTENSION)}}" target="_blank" href="{{asset($tender->file)}}" class="btn-link">Download File</a>
                   </td>
                   <td>
                       {{$tender->published}}
                   </td>
               </tr>

           @endforeach
       </table>
    </div>
</section>
@endsection
