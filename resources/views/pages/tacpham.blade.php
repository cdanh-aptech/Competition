@extends('layout.index')

@section('title')
    Tác phẩm
@endsection

@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row carousel-holder">

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                @include('errors.errors')
                <div class="panel-heading">Thông tin Tác phẩm</div>
                    <div class="panel-body">
                    <form action="tacpham" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div>
                            <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="Họ và tên" name="txt_Ten" aria-describedby="basic-addon1"
                                    value="{{$tacgia->Ten}}">
                        </div>
                        <br>
                        <div>
                            <label><u>Cuộc thi:</u></label>
                            @foreach($contest as $ct)
                            @if ($ct->Active == 1)
                                <input type="text" class="form-control" name="txt_Contest" aria-describedby="basic-addon1"
                                    value="{{$ct->Ten}}" readonly>
                            @endif
                            @endforeach
                        </div>
                        <br>
                        <div>
                            <label> <b><u>Chọn Thể loại dự thi: </u></b> </label>
                            <select class="form-control" name="sel_TheLoai">
                                @foreach($theloai as $tl)
                                    <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div>
                            <label>Tên</label>
                            <input class="form-control" name="txt_Ten" placeholder="Nhập Tên tác phẩm" />
                        </div>
                        <br>

                        <div>
                            <label>Nội dung</label>
                            <textarea id="demo" class="form-control ckeditor" rows="5" name="txt_NoiDung" placeholder="Nhập Nội dung tác phẩm"></textarea>
                        </div>
                        <br>
                        <div>
                            <label>Tập tin Tác phẩm dự thi</label>
                            {{-- <img width="400px" src="images/tacpham/{{$tacpham->Hinh}}"> --}}
                            <input type="file" class="form-control" name="txt_File" />
                        </div>
                        <br>
                        <div>
                            <label>link Google Drive (nếu có)</label>
                            <input class="form-control" name="txt_Link_File" placeholder="Nhập LINK của Tác phẩm"/>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Tải lên
                        </button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
<!-- end Page Content -->    
@endsection

