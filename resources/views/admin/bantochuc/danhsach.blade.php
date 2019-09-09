@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">BAN TỔ CHỨC
                    <small>Danh sách</small>
                </h1>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Thành phần Ban Tổ Chức</th>
                        <th>Cuộc thi</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($bantochuc as $btc)
                    <tr class="odd gradeX" align="center">
                        <td>{{$btc->id}}</td>
                        <td>{{$btc->Thanhphan}}</td>
                        <td>{{$btc->contest->Ten}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/bantochuc/sua/{{$btc->id}}"> Sửa </a></td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/bantochuc/xoa/{{$btc->id}}"> Xóa </a></td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
            
        </div>
        
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection