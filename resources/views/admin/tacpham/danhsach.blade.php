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
                <h1 class="page-header">Tác phẩm
                    <small>danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @include('errors/errors')
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Cuộc thi</th>
                        <th>Tác giả</th>
                        <th>Tên</th>
                        <th>Nội dung</th>
                        <th>Hình</th>
                        <th>link</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tacpham as $tp)
                    <tr class="even gradeC" align="center">
                        <td>{{$tp->contest->Ten}}</td>
                        <td>{{$tp->user->Ten}}</td>
                        <td>{{$tp->Ten}}</td>
                        <td>{{$tp->Noidung}}</td>
                        <td>
                            <img width="400px" src="images/tacpham/{{$tp->Hinh}}" >
                        </td>
                        <td>{{$tp->link_Hinh}}</td>
                        <td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/tacpham/sua/{{$tp->id}}"> Sửa </a></td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/tacpham/xoa/{{$tp->id}}"> Xóa</a></td>
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