@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide
                        <small>thêm mới</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @include('errors/errors')
                    <form action="admin/slide/them" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label><u>Cuộc thi:</u></label>
                            <select class="form-control" name="sel_CuocThi">
                                @foreach($contest as $ct)
                                    <option value="{{$ct->id}}">{{$ct->Ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>TÊN Slide</label>
                            <select class="form-control" name="txt_Ten">
                                <option value="Slide 1">Slide 1</option>
                                <option value="Slide 2">Slide 2</option>
                                <option value="Slide 3">Slide 3</option>
                                <option value="Slide 4">Slide 4</option>
                                <option value="Slide 5">Slide 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <input class="form-control" name="txt_NoiDung" placeholder="Nhập Nội Dung của Slide" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" class="form-control" name="txt_Hinh"/>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input class="form-control" name="txt_Link" placeholder="Nhập Liên kết cho Slide" />
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
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