@extends('admin.layout.index')

@section('title')
    Thể loại
@endsection

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">THỂ LOẠI:
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            
                <div class="col-lg-12">
                    <div class="col-lg-6">
                            <label for="TheLoai"> <b><u>Tên Thể loại: </u></b> </label>
                            <select class="TheLoai form-control" id="TheLoai">
                                    <option value="0">---Chọn Thể loại---</option>
                                @foreach($theloai as $tl)
                                    <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                                @endforeach
                            </select>
                    </div>
                </div>

                    <div class="col-lg-12" id="idView_TheLoai">
                        
                        {{-- Load Ajax --}}

                    </div>
                    {{-- <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-Delete">Click</button> --}}
                    <!-- Button trigger modal -->
                    <!-- Modal -->
                    {{-- <div class="modal fade col-lg-12" id="modal-Delete">
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
                    </div> --}}
                    <!-- End Modal -->

                

                    
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
            $("#TheLoai").change(function(){
                var idTheLoai = $(this).val();
                $.get("admin/ajax/theloai/" + idTheLoai, function(data){
                    // alert(data);
                    $("#idView_TheLoai").html(data);
                });
            });
        });
    </script>
@endsection