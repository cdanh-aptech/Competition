@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">THÀNH PHẦN BAN TỔ CHỨC:
                    <small>Thêm mới</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('errors/errors')
                <form action="admin/bantochuc/them" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><u>Thành phần Ban Tổ Chức:</u></label>
                        <textarea class="form-control" name="txt_ThanhPhanBTC" placeholder="Nhập Thành phần Ban Tổ Chức" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                            <label><u>Thành phần Giám Khảo:</u></label>
                            <textarea class="form-control" name="txt_ThanhPhanGK" placeholder="Nhập Thành phần Ban Tổ Chức" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label><u>Cuộc thi:</u></label>
                        <select class="form-control" name="sel_CuocThi">
                            @foreach($contest as $ct)
                            <option value="{{$ct->id}}">{{$ct->Ten}}</option>
                            @endforeach
                        </select>
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