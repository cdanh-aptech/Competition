@extends('admin.layout.index')

@section('title')
    Cuộc thi
@endsection

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
            </div>
            <div class="col-lg-12" id="idView">
                
                {{-- Ajax Cuộc thi --}}
                    <div class="col-lg-12" style="padding-bottom:20px">
                        <div class="col-lg-3">
                            {{-- <p><b><u>Trạng thái: </u></b></p>  --}}
                            {{-- {{$ct->Active}} --}}
                        </div>
                        <div class="col-lg-2">
                            {{-- <p><b><u>Ngày bắt đầu: </u></b></p>  --}}
                            {{-- {{$ct->Date_begin}} --}}
                        </div>
                        <div class="col-lg-2">
                            {{-- <p><b><u>Ngày kết thúc: </u></b></p>  --}}
                            {{-- {{$ct->Date_end}} --}}
                        </div>
                        <div class="col-lg-2">
                            {{-- <p><b><u>Ngày kết quả: </u></b></p>  --}}
                            {{-- {{$ct->Date_result}} --}}
                        </div>
                    </div>

                    <div class="col-lg-12" style="padding-top:20px">
                        <div class="col-lg-3" style="padding-top:20px">
                            {{-- <i class="fa fa-pencil fa-fw"></i> --}}
                            {{-- <a href="admin/contest/sua/">Sửa</a> --}}
                        </div>
                        <div class="col-lg-3" style="padding-bottom:20px">
                            {{-- <i class="fa fa-trash-o  fa-fw"></i> --}}
                            {{-- <a href="admin/contest/xoa/">Xóa</a> --}}
                        
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                            <div class="modal fade" id="modal-Delete">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modal-Delete">Lưu ý</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc chắn xóa không?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bỏ qua</button>
                                            <button type="button" class="btn btn-danger"> Xóa </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        </div>
                                                            
                    </div>

                    <div class="col-lg-12">
                        {{-- <b><u>Nội dung:</u></b> --}}
                    </div>
                        {{-- <textarea class="col-lg-12" name="NoiDung" rows="5" readonly> --}}
                                {{-- {{$ct->Noidung}} --}}
                        {{-- </textarea> --}}
                    
                    <div class="col-lg-12">
                        {{-- <b><u>Thể lệ:</u></b> --}}
                        {{-- <textarea class="col-lg-12" name="TheLe" rows="5" readonly> --}}
                                {{-- {{$ct->Thele}} --}}
                        {{-- </textarea> --}}
                    </div>

                    <div class="col-lg-12">
                        {{-- <b><u>Thể lệ tóm tắt:</u></b> --}}
                        {{-- <textarea class="col-lg-12" name="TheLe_tomtat" rows="5" readonly> --}}
                                {{-- {{$ct->Thele_tomtat}} --}}
                        {{-- </textarea> --}}
                    </div>

                    <div class="col-lg-12">
                        {{-- <b><u>Ban tổ chức:</u></b> --}}
                        {{-- <textarea class="col-lg-12" name="BanToChuc" rows="5" readonly> --}}
                                {{-- {{$ct->Bantochuc}} --}}
                        {{-- </textarea> --}}
                    </div>

                    <div class="col-lg-12">
                        {{-- <b><u>Ban giám khảo:</u></b> --}}
                        {{-- <textarea class="col-lg-12" name="BanGiamKhao" rows="5" readonly> --}}
                                {{-- {{$ct->Bangiamkhao}} --}}
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
                {{-- End Ajax Cuộc thi --}}

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

{{-- <script id="comment-template" type="text/x-lodash-template">
    <div class="comment">
      <div class="comment-body"><%= comment %></div>
      <div class="commenter">
        <p>
          <span class="posted-by">Posted By: </span>
          <%= commenter %>
        </p>
      </div>
    </div>
</script> --}}
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            
            // Load Ajax Cuộc thi
            $("#idContest").change(function(){
                var idContest = $(this).val();
                $.get("admin/ajax/contest/" + idContest, function(data){
                    // alert(data);
                    $("#idView").html(data);
                    
                });
            });

            // Gọi thử SweetAlert
            // Swal.fire('Hello world!');
            $('.btn-delete').click(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Bạn có chắc thực hiện thao tác không?',
                    text: "Khi xóa thành công không thể phục hồi được",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Thực hiện XÓA!'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                            'Đã xóa thành công!',
                            'Sản phẩm đã được xóa.',
                            'success'
                        )
                        // Submit form
                        // debugger;
                        $(this).parent('#frmXoaSlide').submit();
                        // $('#frmXoaSlide').submit();
                        // $('#frmDeleteProduct').submit();
                    }
                });
            });
        });
    </script>
@endsection