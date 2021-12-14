<style>
    th{
        text-align: center;
        color: #28a745;
    }
    button{
        margin: 5px;
        height: 40px;
        border-radius: 5px;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Group</th>
                        <td>
                            <select name="group" id="hotel">
                                <option value="Quản trị hệ thống">Quản trị hệ thống</option>
                                <option value="Quản lý nhân sự">Quản lý nhân sự</option>
                                <option value="Quản lý phòng">Quản lý phòng</option>
                                <option value="Quản lý dịch vụ">Quản lý dịch vụ</option>
                                <option value="Quản lý lễ tân">Quản lý lễ tân</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>
                            <input style="width: 80%" name="name">
                        </td>
                    </tr>
                    <tr>
                        <th>Sex</th>
                        <td>
                            <input style="width: 80%" name="sex">
                        </td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><input style="width: 80%" name="phone"></td>
                    </tr>

                    <tr>
                        <th>CCCD</th>
                        <td><input style="width: 80%" name="cccd"></td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td><input style="width: 80%" name="email"></td>
                    </tr>
                    <tr>
                        <a href="{{route('hotels.list')}}"><button  type="button" class="btn btn-outline-danger">Hủy</button></a>
                        <button type="submit" class="btn btn-outline-success">Thêm nhân viên</button>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
