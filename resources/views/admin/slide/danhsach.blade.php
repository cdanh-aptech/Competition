@extends('admin.layout.index')

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
                            <td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/slide/xoa/{{$sl->id}}"> Xóa</a></td>
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