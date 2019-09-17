@extends('layout.index')

@section('title')
    Đăng nhập
@endsection

@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row carousel-holder">
        <div class="col-md-4"></div>
        <div class="col-md-4">

                @include('errors.errors')
                
            <div class="panel panel-primary bg-transparent">
                    <div class="panel-heading">Đăng nhập</div>
                    <div class="panel-body">
                    
                    <form action="dangnhap" method="POST">
                        {{csrf_field()}}
                        <div>
                            <label>Email</label>
                                <input type="email" class="form-control" placeholder="Nhập email" name="txt_Email" 
                                >
                        </div>
                        <br>	
                        <div>
                            <label>Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập mật khẩu"name="txt_Password">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Đăng nhập
                        </button>
                    </form>
                    </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<!-- end Page Content -->
@endsection