@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">CẬP NHẬT:
                    <small>{{$contest->Ten}}</small>
                </h1>
            </div>

            

            <!-- /.col-lg-12 -->
            <div class="col-lg-12 form-group" style="padding-bottom:120px">
                {{-- @foreach($contest as $ct) --}}
            @include('errors/errors')

            <form action="admin/contest/sua/{{$contest->id}}" method="POST">
                <div class="col-lg-12">
                    <div class="col-lg-3">
                        <label for="Contest"> <b><u>Tên Cuộc thi: </u></b> </label>
                    </div>

                    <div class="col-lg-10" style="padding-bottom:20px">
                        <input type="text" class="Contest col-lg-12" name="txt_Ten" value="{{$contest->Ten}}">
                    </div>
                </div>
                    
                <div class="col-lg-12" id="idSua">
                    <div class="col-lg-3">
                        <p><b><u>Trạng thái: </u></b></p> 
                        <select class="form-control" name="sel_Active" id="Active">
                            <option value="0">Không hoạt động</option>
                            <option value="1" <?php if ($contest->Active == 1) echo 'selected' ?> >Đang hoạt động</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <p><b><u>Ngày bắt đầu: </u></b></p> 
                        <input class="form-control" type="date" name="txt_Date_begin" value="{{$contest->Date_begin}}">
                    </div>
                    <div class="col-lg-2">
                        <p><b><u>Ngày kết thúc: </u></b></p> 
                        <input class="form-control" type="date" name="txt_Date_end" value="{{$contest->Date_end}}">
                    </div>
                    <div class="col-lg-2" style="padding-bottom:20px">
                        <p><b><u>Ngày kết quả: </u></b></p> 
                        <input class="form-control" type="date" name="txt_Date_result" value="{{$contest->Date_result}}">
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Nội dung:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_NoiDung" rows="5">{{$contest->Noidung}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Thể lệ:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_TheLe" rows="5">{{$contest->Thele}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                            <b><u>Thể lệ tóm tắt:</u></b>
                            <textarea id="demo" class="col-lg-12 ckeditor" name="txt_TheLe_tomtat" rows="5">{{$contest->Thele_tomtat}}</textarea>
                        </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Quy cách:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_QuyCach" rows="5">{{$contest->Quycach}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Phương thức:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_PhuongThuc" rows="5">{{$contest->Phuongthuc}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Đối tượng:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_DoiTuong" rows="5">{{$contest->Doituong}}</textarea>
                    </div>

                    <div class="col-lg-12" style="padding-bottom:20px">
                        <b><u>Giải thưởng:</u></b>
                        <textarea id="demo" class="col-lg-12 ckeditor" name="txt_GiaiThuong" rows="5">{{$contest->Giaithuong}}</textarea>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-top:10px;">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button type="reset" class="btn btn-light">Làm lại</button>
                </div>
                {{csrf_field()}}
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