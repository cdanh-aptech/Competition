@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cập nhật SLIDE: 
                    <small>{{$slide->Ten}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @include('errors/errors')
            <form action="admin/slide/sua/{{$slide->id}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label><u>Cuộc thi:</u></label>
                    <select class="form-control" name="sel_CuocThi">
                        @foreach($contest as $ct)
                            <option value="{{$ct->id}}" 
                                <?php if($ct->id == $slide->id_contest) echo 'selected' ?> 
                                >{{$ct->Ten}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="txt_Ten" value="{{$slide->Ten}}" readonly/>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <input class="form-control" name="txt_NoiDung" value="{{$slide->Noidung}}" placeholder="Nhập NỘI DUNG của Slide"/>
                </div>

                <div class="form-group">
                    <label>Hình</label>
                <img width="400px" src="images/slide/{{$slide->Hinh}}">
                    <input type="file" class="form-control" name="txt_Hinh" />
                </div>

                <div class="form-group">
                    <label>link</label>
                    <input class="form-control" name="txt_Link" value="{{$slide->link}}" placeholder="Nhập LINK của Slide"/>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <button type="reset" class="btn btn-light">Làm lại</button>
            </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection