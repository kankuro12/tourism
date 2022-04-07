@extends('admin.layout.app')
@section('css')
<style>

</style>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('s-title')
/ Setting / Front
@endsection
@section('content')
    <div class="card mb-4 shadow" id="sender">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" name="message" id="message" class="form-control" maxlength="160"></textarea>
            </div>
            <div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="is_push" value="1" >
                        <label class="form-check-label" for="is_push">App Notification</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="is_sms" value="1" >
                        <label class="form-check-label" for="is_sms">SMS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="ss" value="true" onchange="toogleFilter(this);" checked>
                        <label class="form-check-label" for="ss">Send To All</label>
                    </div>
                </div>
            </div>
            <div class="card mb-4" id="filter-holder" >
                <div class="card-body">
                    @php
                        $mls=\App\Models\MemberLevel::select('id','name')->get();
                        $mts=\App\Models\MemberType::select('id','name')->get();
                        $wards=\App\Models\Member::join('users','users.id','=','members.user_id')->distinct('members.ward')->orderBy('members.ward')->where('users.nagarcode',Auth::user()->nagarcode)->pluck('members.ward');
                    @endphp
                <form class="mb-4" id="selector-table"  target="_blank" method="POST" onsubmit="return selectMembers(this,event);">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="ml">Member Level</label>
                            <select name="ml[]" id="ml" class="form-control select2" multiple >
                                @foreach ($mls as $ml)
                                    <option value="{{$ml->id}}">{{$ml->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="mt">Member Type</label>
                            <select name="mt[]" id="mt" class="form-control select2" multiple>
                                @foreach ($mts as $mt)
                                    <option value="{{$mt->id}}">{{$mt->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="ward">Ward</label>
                            <select name="ward[]" id="ward" class="form-control select2" multiple>
                                @foreach ($wards as $ward)
                                    <option value="{{$ward}}">{{$ward}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 pt-2">
                            <button class="btn btn-primary w-100">Load Members</button>
                        </div>
                    </div>
                </form>
                <div style="max-height:500px;overflow-y:auto;" class="card shadow ">
                    <div class="card-body">
                        <table class="table">
                            <thead >
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="text" name="person-search-name" id="person-search-name" class="form-control" oninput="search()" placeholder="Search With Name">
                                    </td>
                                    <td>
                                        <input type="text" name="person-search-phone" id="person-search-phone" class="form-control"  oninput="search()" placeholder="Search With Phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <input type="checkbox" name="sell_all" id="person" onchange="personSelector(this)">
                                        All
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-data">

                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" onclick="save()">Send Alert</button>
            </div>
        </div>
    </div>



@endsection
@section('script')

@endsection
