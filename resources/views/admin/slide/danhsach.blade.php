@extends('admin.layout.index')

@section('title')
    Slide
@endsection

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide
                        <small>danh sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @include('errors/errors')
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>Cuộc thi</th>
                            <th>Tên</th>
                            <th>Nội dung</th>
                            <th>Hình</th>
                            <th>link</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slide as $sl)
                        <tr class="even gradeC" align="center">
                            <td>{{$sl->contest->Ten}}</td>
                            <td>{{$sl->Ten}}</td>
                            <td>{{$sl->Noidung}}</td>
                            <td>
                                <img width="400px" src="images/slide/{{$sl->Hinh}}" >
                            </td>
                            <td>{{$sl->link}}</td>
                            <td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/slide/sua/{{$sl->id}}"> Sửa </a></td>
                            <td>
                                <form id="frmXoaSlide" name="frmXoaSlide" method="get" action="admin/slide/xoa/{{$sl->id}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger btn-icon-split btn-delete">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </span>
                                        <span class="text">Xóa</span>
                                    </button>
                                </form>
                            </td>
                            {{-- <td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/slide/xoa/{{$sl->id}}"> Xóa</a></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
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