@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">CUỘC THI - 
                        <small>Thêm mới</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-9" style="padding-bottom:120px">
                    {{-- Hiện lỗi --}}
                    @include('errors/errors')
                    
                    <form action="admin/contest/them" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><u>TÊN:</u></label>
                        <input class="form-control" name="txt_Ten" placeholder="Nhập TÊN Cuộc Thi" />
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="col-lg-4">
                                <label><u>NGÀY BẮT ĐẦU</u></label>
                                <input type="date" class="form-control" name="txt_Date_begin" />
                            </div>
                            <div class="col-lg-4">
                                <label><u>NGÀY KẾT THÚC</u></label>
                                <input type="date" class="form-control date" name="txt_Date_end" />
                            </div>
                            <div class="col-lg-4">
                                <label><u>NGÀY KẾT QUẢ</u></label>
                                <input type="date" class="form-control date" name="txt_Date_result" />
                            </div>
                                
                        </div>
                        <div class="form-group">
                                <label><u>NỘI DUNG:</u></label>
                                <textarea class="form-control" name="txt_NoiDung" placeholder="Nhập NỘI DUNG Cuộc Thi" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                                <label><u>QUY ĐỊNH:</u></label>
                                <textarea class="form-control" name="txt_QuyDinh" placeholder="Nhập QUY ĐỊNH Cuộc Thi" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                                <label><u>QUY CÁCH:</u></label>
                                <textarea class="form-control" name="txt_QuyCach" placeholder="Nhập QUY CÁCH Cuộc Thi" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                                <label><u>PHƯƠNG THỨC:</u></label>
                                <textarea class="form-control" name="txt_PhuongThuc" placeholder="Nhập PHƯƠNG THỨC Cuộc Thi" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                                <label><u>ĐỐI TƯỢNG:</u></label>
                                <textarea class="form-control" name="txt_DoiTuong" placeholder="Nhập ĐỐI TƯỢNG Cuộc Thi" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                                <label><u>GIẢI THƯỞNG:</u></label>
                                <textarea class="form-control" name="txt_GiaiThuong" placeholder="Nhập GIẢI THƯỞNG Cuộc Thi" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                        <button type="reset" class="btn btn-light">Làm mới</button>
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