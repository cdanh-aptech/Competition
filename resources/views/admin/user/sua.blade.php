@extends('admin.layout.index')

@section('title')
    User
@endsection

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cập nhật USER :
                <small>{{$user->Ten}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('errors/errors')
            <form action="admin/user/sua/{{$user->id}}" method="POST">
                    <div class="form-group">
                        <label>Họ và Tên</label>
                        <input class="form-control" name="txt_Ten" placeholder="Nhập Họ và Tên"
                            value="{{$user->Ten}}" 
                        />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="txt_Email" placeholder="Nhập Email để đăng nhập" 
                            value="{{$user->email}}" readonly
                        />
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="chk_Password" id="chk_Password" />
                        <label>Đổi Mật khẩu</label>
                        <input type="password" class="form-control password" name="txt_Password" placeholder="Nhập Mật khẩu để đăng nhập" disabled />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control password" name="txt_RePassword" placeholder="Nhập lại Mật khẩu" disabled />
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="txt_DiaChi" placeholder="Nhập Địa chỉ liên hệ" 
                            value="{{$user->Diachi}}"
                        />
                    </div>
                    <div class="form-group">
                        <label>Quyền</label>
                        <label class="radio-inline">
                            <input name="Level" value="0" 
                            @if ($user->quyen == 0)
                                {{"checked"}}
                            @endif
                             type="radio">Tác giả
                        </label>
                        <label class="radio-inline">
                            <input name="Level" value="1" 
                            @if ($user->quyen == 1)
                                {{"checked"}}
                            @endif
                            type="radio">Admin
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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

@section('script')
    <script>
        $(document).ready(function(){
            $("#chk_Password").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection