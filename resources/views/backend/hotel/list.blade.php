<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Of Employee</h6>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <a class="btn btn-success mt-3 mb-3" href="{{route('hotels.create')}}">ADD STAFF</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Employee code</th>
                <th>Group</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Phone</th>
                <th>CCCD</th>
                <th>Email</th>
                <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hotels as $key => $hotel)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$hotel["group"]}}</td>
                    <td>{{$hotel["name"]}}</td>
                    <td>{{$hotel["sex"]}}</td>
                    <td>{{$hotel["phone"]}}</td>
                    <td>{{$hotel["cccd"]}}</td>
                    <td>{{$hotel["email"]}}</td>
                    <td>{{$hotel["address"]}}</td>
                    <td><a class="btn btn-success" href="{{route('hotels.update',$hotel->id)}}">Update</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')" href="{{route('hotels.delete',$hotel->id)}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
