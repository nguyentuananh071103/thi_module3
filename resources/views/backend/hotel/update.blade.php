<style>
    th{
        text-align: center;
        color: #28a745;
    }
    button{
        margin: 5px;
        height: 40px;
        border-radius: 15px;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">HOTEL UPDATE</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Group</th>
                        <td><input style="width: 90%" type="text" name="group" value="{{$hotel->group}}"></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><input style="width: 90%" type="text" name="name" value="{{$hotel->name}}"></td>
                    </tr>
                    <tr>
                        <th>Sex</th>
                        <td><input style="width: 90%" type="text" name="sex" value="{{$hotel->sex}}"></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><input style="width: 90%" type="text" name="phone" value="{{$hotel->phone}}"></td>
                    </tr>
                    <tr>
                        <th>CCCD</th>
                        <td><input style="width: 90%" type="text" name="cccd" value="{{$hotel->cccd}}"></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input style="width: 90%" type="text" name="email" value="{{$hotel->email}}"></td>
                    </tr>

                    <tr>
                        <a href="{{route('hotels.list')}}"><button type="button" class="btn btn-outline-danger">Hủy</button></a>
                        <button  type="submit" class="btn btn-outline-success">Chỉnh sửa nhân viên</button>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
