<div class="col-md-4" id="contact-{{$contact->id}}">
    <div class="bg-white shadow mb-2">
        <div class="card-body">

            <form action="{{route('admin.destination.contact.edit',['contact'=>$contact->id])}}" method="post" onsubmit="return update(this,event);">
                @csrf
                <input type="hidden" name="id" value="{{$contact->id}}">
                <div class="form-group">
                    <label for="name-{{$contact->id}}">Name</label>
                    <input type="text" name="name" id="name-{{$contact->id}}" class="form-control" required value="{{$contact->name}}">
                </div>
                <div class="form-group">
                    <label for="address-{{$contact->id}}">Address</label>
                    <input type="text" name="address" id="address-{{$contact->id}}" class="form-control" required  value="{{$contact->address}}">
                </div>
                <div class="form-group">
                    <label for="phone-{{$contact->id}}">Phone</label>
                    <input type="text" name="phone" id="phone-{{$contact->id}}" class="form-control" required  value="{{$contact->phone}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-danger w-100" onclick="return del({{$contact->id}},event)">Delete</button>

                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100" >Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
