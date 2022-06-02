@extends('admin.layout.app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>

</style>
@endsection

@section('s-title')
 Tenders
@endsection
@section('toolbar')
<a href="{{route('admin.tenders.add')}}" class="btn btn-primary">Add New</a>
@endsection
@section('content')
    <table class="table">
        <tr>
            <th>
                #ID
            </th>
            <th>
                Title
            </th>
            <th>
                Published
            </th>
            <th>

            </th>
        </tr>
        @foreach ($tenders as $tender)
            <tr>
                <td>{{$tender->id}}</td>
                <td>{{$tender->title}}</td>
                <td>{{$tender->updated_at}}</td>
                <td>
                    <a href="{{route('admin.tenders.edit',['tender'=>$tender->id])}}" class="btn btn-success">Edit</a>
                    <a onclick="return confirm('Do You want to Delete Tender');" href="{{route('admin.tenders.del',['tender'=>$tender->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
@section('script')

@endsection
