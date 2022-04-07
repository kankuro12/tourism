@extends('admin.layout.app')
@section('css')
@endsection

@section('s-title')
    <a href="{{ route('admin.destination.index', ['type' => $type->id]) }}">Destinations - {{ $type->name }}</a> /
    {{ $destination->name }} / Contacts
@endsection

@section('content')
    <div class="bg-white shadow mb-3">
        <div class="card-body">
            <form action="{{ route('admin.destination.contact.add') }}" method="post" onsubmit="return add(this,event);">
                @csrf
                <input type="hidden" name="destination_id" value="{{ $destination->id }}">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">

                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button class="btn btn-primary">Add Contact</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mb-3">
        <div class="card-body">
            <div class="row" id="contacts">
                @foreach ($contacts as $contact)
                    @include('admin.destination.contact.single', [
                        'contact' => $contact,
                    ])
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var loading = false;

        function add(ele, e) {
            e.preventDefault();
            if (!loading) {
                loading = true;
                data = new FormData(ele);
                axios.post('{{ route('admin.destination.contact.add') }}', data)
                    .then((res) => {
                        $('#contacts').prepend(res.data);
                        toastr.success('Contact added sucessfully');
                        ele.reset();
                        loading = false;
                    })
                    .catch((err) => {
                        loading = false;
                    });
            }

        }

        function update(ele, e, id) {
            e.preventDefault();
            if (!loading) {
                loading = true;
                data = new FormData(ele);
                axios.post('{{ route('admin.destination.contact.edit') }}', data)
                    .then((res) => {
                        toastr.success('Contact updated sucessfully');
                        loading = false;
                    })
                    .catch((err) => {
                        loading = false;
                    });
            }

        }

        function del(id,e) {
            e.preventDefault();
            if (!loading) {
                if (confirm('Do you want to delete contact')) {

                    loading = true;
                    data = {
                        id: id
                    };
                    axios.post('{{ route('admin.destination.contact.delete') }}', data)
                        .then((res) => {
                            $('#contact-' + id).remove();
                            toastr.success('Contact delete sucessfully');
                            loading = false;
                        })
                        .catch((err) => {
                            loading = false;
                        });
                }
            }
        }
    </script>
@endsection
