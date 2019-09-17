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
                <h1 class="page-header">Cập nhật TÁC PHẨM: 
                    <small>{{$tacpham->Ten}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @include('errors/errors')
            <form action="admin/tacpham/sua/{{$tacpham->id}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label><u>Cuộc thi:</u></label>
                    <select class="form-control" name="sel_CuocThi">
                        @foreach($contest as $ct)
                            <option value="{{$ct->id}}" 
                                <?php if($ct->id == $tacpham->id_contest) echo 'selected' ?> 
                                >{{$ct->Ten}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                        <label><u>Tác giả:</u></label>
                        <select class="form-control" name="sel_TacGia">
                            @foreach($user as $u)
                                <option value="{{$u->id}}" 
                                    <?php if($u->id == $tacpham->id_user) echo 'selected' ?> 
                                    >{{$u->Ten}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="txt_Ten" value="{{$tacpham->Ten}}" />
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea id="demo" class="form-control ckeditor" name="txt_NoiDung" placeholder="Nhập NỘI DUNG của Tác phẩm">{{$tacpham->Noidung}}</textarea>
                </div>

                <div class="form-group">
                    <label>Hình</label>
                <img width="400px" src="images/tacpham/{{$tacpham->Hinh}}">
                    <input type="file" class="form-control" name="txt_Hinh" />
                </div>

                <div class="form-group">
                    <label>link</label>
                    <input class="form-control" name="txt_Link_Hinh" value="{{$tacpham->link_Hinh}}" placeholder="Nhập LINK của Tác phẩm"/>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
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