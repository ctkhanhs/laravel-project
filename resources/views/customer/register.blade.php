@extends('master.site')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="form-block">
                <form action="#" method="post" id="signup_form">
                    <div class="form-group first">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="your-email@gmail.com" name="email">
                    </div>

                    <div class="form-group last mb-3">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password" id="password">
                    </div>
                    <div class="form-group last mb-3">
                        <label for="comfirm_password">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="comfirm_password">
                    </div>


                    <div class="form-group first">
                        <label for="firstnamr">Họ và Tên</label>
                        <input type="text" class="form-control" placeholder="Nguyễn Văn A" name="name">
                    </div>

                    <div class="form-group first">
                        <label for="phonenumber">Số điện thoại</label>
                        <input type="text" class="form-control" placeholder="012345678" name="phone">
                    </div>

                    <div class="form-group first">
                        <label for="phonenumber">Địa chỉ</label>
                        <input type="text" class="form-control" placeholder="" name="address">
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm mới</button>

                </form>
            </div>
        </div>
    </div>
</div>

@stop()