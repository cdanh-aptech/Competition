@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">CUỘC THI:
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            
                <div class="col-lg-12">
                    <div class="col-lg-6">
                            <label for="Contest"> <b><u>Tên Cuộc thi: </u></b> </label>
                            <select class="Contest form-control" id="idContest">
                                    <option value="0">---Chọn Cuộc thi---</option>
                                @foreach($contest as $ct)
                                    <option value="{{$ct->id}}">{{$ct->Ten}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col-lg-2">
                        <i class="fa fa-pencil fa-fw"></i> <a href="#">Sửa</a>
                    </div>
                    <div class="col-lg-2">
                        <i class="fa fa-trash-o  fa-fw"></i><a href="#">Xóa</a>
                    </div>
                </div>

            {{-- @foreach($contest as $ct) --}}
                {{-- @if($ct->id > 0) --}}
                    <div class="col-lg-12" id="idView">
                        <div class="col-lg-3">
                            {{-- <p><b><u>Trạng thái: </u></b></p>  --}}
                            {{-- {{$ct->Active}} --}}
                        </div>
                        <div class="col-lg-3">
                            {{-- <p><b><u>Ngày bắt đầu: </u></b></p>  --}}
                            {{-- {{$ct->Date_begin}} --}}
                        </div>
                        <div class="col-lg-3">
                            {{-- <p><b><u>Ngày kết thúc: </u></b></p>  --}}
                            {{-- {{$ct->Date_end}} --}}
                        </div>
                        <div class="col-lg-3">
                            {{-- <p><b><u>Ngày kết quả: </u></b></p>  --}}
                            {{-- {{$ct->Date_result}} --}}
                        </div>

                        <div class="col-lg-12">
                            {{-- <b><u>Nội dung:</u></b> --}}
                        </div>
                            {{-- <textarea class="col-lg-12" name="NoiDung" rows="5" readonly> --}}
                                    {{-- {{$ct->Noidung}} --}}
                            {{-- </textarea> --}}
                        
                        <div class="col-lg-12">
                            {{-- <b><u>Quy định:</u></b> --}}
                            {{-- <textarea class="col-lg-12" name="QuyDinh" rows="5" readonly> --}}
                                    {{-- {{$ct->Quydinh}} --}}
                            {{-- </textarea> --}}
                        </div>

                        <div class="col-lg-12">
                            {{-- <b><u>Quy cách:</u></b> --}}
                            {{-- <textarea class="col-lg-12" name="QuyCach" rows="5" readonly> --}}
                                    {{-- {{$ct->Quycach}} --}}
                            {{-- </textarea> --}}
                        </div>

                        <div class="col-lg-12">
                            {{-- <b><u>Phương thức:</u></b> --}}
                            {{-- <textarea class="col-lg-12" name="PhuongThuc" rows="5" readonly> --}}
                                    {{-- {{$ct->Phuongthuc}} --}}
                            {{-- </textarea> --}}
                        </div>

                        <div class="col-lg-12">
                            {{-- <b><u>Đối tượng:</u></b> --}}
                            {{-- <textarea class="col-lg-12" name="DoiTuong" rows="5" readonly> --}}
                                    {{-- {{$ct->Doituong}} --}}
                            {{-- </textarea> --}}
                        </div>

                        <div class="col-lg-12">
                            {{-- <b><u>Giải thưởng:</u></b> --}}
                            {{-- <textarea class="col-lg-12" name="GiaiThuong" rows="5" readonly> --}}
                                    {{-- {{$ct->Giaithuong}} --}}
                            {{-- </textarea> --}}
                        </div>
                    </div>
                {{-- @endif --}}
            {{-- @endforeach --}}
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
            $("#idContest").change(function(){
                var idContest = $(this).val();
                $.get("admin/ajax/contest/" + idContest, function(data){
                    // alert(data);
                    $("#idView").html(data);
                    
                });
            });
        });
    </script>
@endsection