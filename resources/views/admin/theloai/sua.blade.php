@extends('admin.layout.index')

@section('title')
    Thể Loại
@endsection

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">CẬP NHẬT:
                    <small>{{$theloai->Ten}}</small>
                </h1>
            </div>

            

            <!-- /.col-lg-12 -->
            <div class="col-lg-12 form-group" style="padding-bottom:120px">
                {{-- @foreach($contest as $ct) --}}
            @include('errors/errors')

            <form action="admin/theloai/sua/{{$theloai->id}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <label for="TheLoai"> <b><u>Tên Thể loại: </u></b> </label>
                    </div>

                    <div class="col-lg-6" style="padding-bottom:20px">
                        <input type="text" class="TheLoai col-lg-12" name="txt_Ten" value="{{$theloai->Ten}}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="TheLoai"> <b><u>Tên Chủ đề: </u></b> </label>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <input type="text" class="TheLoai col-lg-12" name="txt_Ten_ChuDe" value="{{$theloai->Ten_chude}}">
                    </div>
                </div>
                    
                <div class="col-lg-12" id="idSua">
                    <div class="col-lg-6">
                            <label for="Contest"> <b><u>Tên Cuộc thi: </u></b> </label>
                            <select class="Contest form-control" name="sel_Contest">
                                @foreach($contest as $ct)
                                    <option value="{{$ct->id}}" <?php if($theloai->id_contest == $ct->id) echo 'selected' ?> >{{$ct->Ten}}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="col-lg-12" style="padding-top:20px">
                        <b><u>File Thể lệ chi tiết (*.pdf):</u></b>
                        {{$theloai->Thele_pdf}}
                        <input type="file" class="col-lg-12" name="txt_TheLe_pdf" rows="5" value="{{$theloai->Thele_pdf}}"/>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <hr>
                        <b><u>Mục đích:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_MucDich" rows="5">{{$theloai->Mucdich}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Đối tượng:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_DoiTuong" rows="5">{{$theloai->Doituong}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Nội dung:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_NoiDung" rows="5">{{$theloai->Noidung}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Thể lệ:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_TheLe" rows="5">{{$theloai->Thele}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Thể lệ tóm tắt:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_TheLe_tomtat" rows="5">{{$theloai->Thele_tomtat}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Quy định:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_QuyDinh" rows="5">{{$theloai->Quydinh}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Tiêu chí:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_TieuChi" rows="5">{{$theloai->Tieuchi}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Giải thưởng:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_GiaiThuong" rows="5">{{$theloai->Giaithuong}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Giải thưởng tóm tắt:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_GiaiThuong_tomtat" rows="5">{{$theloai->Giaithuong_tomtat}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Quy cách:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_QuyCach" rows="5">{{$theloai->Quycach}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Phương thức:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_PhuongThuc" rows="5">{{$theloai->Phuongthuc}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Ban tổ chức:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_BanToChuc" rows="5">{{$theloai->Bantochuc}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Ban giám khảo:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_BanGiamKhao" rows="5">{{$theloai->Bangiamkhao}}</textarea>
                    </div>
                    
                    <div class="col-lg-12" style="padding-top:10px;">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <button type="reset" class="btn btn-light">Làm lại</button>
                    </div>
                </div>
            </form>
                
                {{-- @endforeach --}}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection