@extends('layout.index')

@section('title')
    Tác giả
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
                <div class="panel-heading">Thông tin Tác giả</div>
                    <div class="panel-body">
                    <form action="tacgia" method="POST">
                        {{csrf_field()}}
                        <div>
                            <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="Họ và tên" name="txt_Ten" aria-describedby="basic-addon1"
                                    value="{{$tacgia->Ten}}">
                        </div>
                        <br>
                        <div>
                            <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="txt_Email" aria-describedby="basic-addon1"
                                value="{{$tacgia->email}}" disabled >
                        </div>
                        <br>
                        <div>
                            <label>Địa chỉ</label>
                                <input type="text" class="form-control" placeholder="Địa chỉ" name="txt_DiaChi" aria-describedby="basic-addon1"
                                value="{{$tacgia->Diachi}}">
                        </div>
                        <br>

                        <div>
                            <input type="checkbox" name="chk_Password" id="chk_Password" />
                            <label>Đổi mật khẩu</label>
                            <input type="password" class="form-control password" name="txt_Password" aria-describedby="basic-addon1"
                            placeholder="Nhập mật khẩu" disabled>
                        </div>
                        <br>
                        <div>
                            <input type="password" class="form-control password" name="txt_RePassword" aria-describedby="basic-addon1"
                            placeholder="Nhập lại mật khẩu" disabled>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Sửa
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