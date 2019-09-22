@extends('layout.index')

@section('title')
    Thống kê
@endsection

@section('content')
    <!-- Slide--> 
    {{-- @include('layout.slide') --}}
    <!-- End Slide-->

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        {{-- <div class="row"> --}}
            <div class="col-lg-12">
                <h1 class="page-header">DANH SÁCH : 
                    <small>Tác giả dự thi</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @include('errors/errors')
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th class="text-center">Tác phẩm</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 1; 
                        $count_tp = 0;
                    ?>
                    @foreach($tacgia as $tg)
                        <tr class="odd gradeX" align="left">
                            <td>{{$stt}}</td>
                            <td>{{$tg->Ten}}</td>
                            <td>{{$tg->email}}</td>
                            <td>{{$tg->Diachi}}</td>
                            @foreach($tacpham_user as $tp)
                                @if($tp->id_user == $tg->id)
                                    <?php $count_tp++; ?>
                                @endif
                            @endforeach
                            <td class="text-center">{{$count_tp}}</td>
                            <?php 
                                $count_tp=0;
                                $stt++;
                            ?>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{-- </div> --}}
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
    
    <!-- Intro--> 
    @include('layout.intro')
    <!-- End Intro-->
    
@endsection