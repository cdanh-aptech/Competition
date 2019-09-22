@extends('layout.index')

@section('title')
    Đăng ký
@endsection

@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row carousel-holder">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                @include('errors.errors')
                <div class="panel-heading">ĐĂNG KÝ THÀNH VIÊN</div>
                    <div class="panel-body">
                        <form action="dangky" method="POST">
                            {{csrf_field()}}
                        <div>
                            <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="Nhập Họ và tên (tối thiểu 6 ký tự)" name="txt_Ten" aria-describedby="basic-addon1"
                                >
                        </div>
                        <br>
                        <div>
                            <label>Email</label>
                                <input type="email" class="form-control" placeholder="Nhập Email" name="txt_Email" aria-describedby="basic-addon1"
                                >
                        </div>
                        <br>
                        <div>
                            <label>Địa chỉ</label>
                                <input type="text" class="form-control" placeholder="Nhập Địa chỉ (tối thiểu 8 ký tự)" name="txt_DiaChi" aria-describedby="basic-addon1"
                                >
                        </div>
                        <br>	
                        <div>
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="txt_Password" aria-describedby="basic-addon1"
                            placeholder="Nhập mật khẩu (8-32 ký tự)">
                        </div>
                        <br>
                        <div>
                            <input type="password" class="form-control" name="txt_RePassword" aria-describedby="basic-addon1"
                            placeholder="Nhập lại mật khẩu (8-32 ký tự)">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Đăng ký
                        </button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
    <!-- end Page Content -->
@endsection

