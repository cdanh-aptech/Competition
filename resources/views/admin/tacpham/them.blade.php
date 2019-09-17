@extends('admin.layout.index')

@section('title')
    Tác phẩm
@endsection

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">THÊM MỚI: 
                    <small>Tác phẩm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @include('errors/errors')
            <form action="admin/tacpham/them" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label><u>Cuộc thi:</u></label>
                    <select class="form-control" name="sel_CuocThi">
                        @foreach($contest as $ct)
                            <option value="{{$ct->id}}">{{$ct->Ten}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label><u>Tác giả:</u></label>
                    <select class="form-control" name="sel_TacGia">
                        @foreach($user as $u)
                            <option value="{{$u->id}}">{{$u->Ten}}</option>
                        @endforeach
                    </select>
                    </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="txt_Ten" placeholder="Nhập Tên tác phẩm" />
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea id="demo" class="form-control ckeditor" name="txt_NoiDung" placeholder="Nhập Nội dung tác phẩm"></textarea>
                </div>

                <div class="form-group">
                    <label>Hình ảnh</label>
                {{-- <img width="400px" src="images/tacpham/{{$tacpham->Hinh}}"> --}}
                    <input type="file" class="form-control" name="txt_Hinh" />
                </div>

                <div class="form-group">
                    <label>link</label>
                    <input class="form-control" name="txt_Link_Hinh" placeholder="Nhập LINK của Tác phẩm"/>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-light">Làm lại</button>
            </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection