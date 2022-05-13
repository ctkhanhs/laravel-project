@extends('master.site')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="form-block">
                <form action="" method="POST" role="form">
                    @csrf
                    <div class="form-group first">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="your-email@gmail.com" name="email">
                    </div>
                    <div class="form-group last mb-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" name="password">
                    </div>

                    <div class="d-sm-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                            <input type="checkbox" checked="checked" />
                            <div class="control__indicator"></div>
                        </label>
                        <span class="ml-auto"><a href="#" class="forgot-pass text-body">Forgot Password</a></span>
                    </div>

                    <button type="submit" class="btn btn-block btn-dark">Đăng Nhập</button>

                </form>
            </div>
        </div>
    </div>
</div>

@stop()