@extends('admin.layout.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>

    </style>
@endsection

@section('s-title')
    Notices
@endsection
@section('toolbar')
    <a href="{{ route('admin.notices.add') }}" class="btn btn-primary">Add New</a>
@endsection
@section('content')
    <div class="bg-white shadow mb-3 ">
        <div class="card-body">
            <table id="notices">
                <thead>

                    <tr>
                        <th>Title</th>
                        <th>
                            Subtitle
                        </th>
                        <th>
                            Download
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($notices as $notice)
                        <tr>
                            <td>
                                {{ $notice->name }}
                            </td>
                            <td>
                                {{ $notice->desc }}
                            </td>
                            <td>
                                <a target="_blank" href="{{ asset($notice->image) }}">View</a>
                            </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.notices.edit', ['notice' => $notice->id]) }}">Edit</a>
                                <a class="btn btn-danger"
                                    href="{{ route('admin.notices.del', ['notice' => $notice->id]) }}"
                                    onclick="return prompt('Enter yes to delete')=='yes';">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#notices').DataTable({
                "columns": [
                    null,
                    null,
                    {
                        'searchable': false
                    },
                    {
                        'searchable': false
                    },
                ]
            });
        });
    </script>
@endsection
