@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">USER :
                    <small>Thêm mới</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('errors/errors')
                <form action="admin/user/them" method="POST">
                    <div class="form-group">
                        <label>Họ và Tên</label>
                        <input class="form-control" name="txt_Ten" placeholder="Nhập Họ và Tên" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="txt_Email" placeholder="Nhập Email để đăng nhập" />
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" name="txt_Password" placeholder="Nhập Mật khẩu để đăng nhập" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="txt_RePassword" placeholder="Nhập lại Mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="txt_DiaChi" placeholder="Nhập Địa chỉ liên hệ" />
                    </div>
                    <div class="form-group">
                        <label>Quyền</label>
                        <label class="radio-inline">
                            <input name="Level" value="0" checked="" type="radio">Tác giả
                        </label>
                        <label class="radio-inline">
                            <input name="Level" value="1" type="radio">Admin
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button type="reset" class="btn btn-light">Làm lại</button>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection