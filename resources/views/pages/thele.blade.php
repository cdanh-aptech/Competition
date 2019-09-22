@extends('layout.index')

@section('title')
    Thể lệ
@endsection

@section ('content')

    <!-- Slide--> 
    {{-- @include('layout.slide') --}}
    <!-- End Slide-->
@foreach($contest as $ct)
    @php
        $Date_begin = date('d/m/Y', strtotime($ct->Date_begin));
        $Date_end = date('d/m/Y', strtotime($ct->Date_end));
        $Date_result = date('d/m/Y', strtotime($ct->Date_result));
        $Date_view = date('d-m-Y', strtotime($ct->Date_end));
        // $Date_award = $Date_result;
        // date_add($Date_award, date_interval_create_from_date_string("7 days"));
        $date=date_create($ct->Date_end);
        date_add($date,date_interval_create_from_date_string("2 days"));
        $Date_recive = date_format($date,"d/m/Y");
        
        $date=date_create($ct->Date_result);
        date_add($date,date_interval_create_from_date_string("7 days"));
        $Date_award = date_format($date,"d/m/Y");
    @endphp
<div class="container-fluid">
    <!-- .row -->
    <div class="row">

{{-- Chia Tabs cho từng Chủ đề --}}

    {{-- Tab --}}

        <div id="tab_ChuDe" class="col-lg-8">

        {{-- Tab Header --}}
            <ul>
                @foreach($theloai as $tl)
                    @if($tl->id_contest == $ct->id)
                        <li><a href="#tab_{{$tl->id}}">{!!$tl->Ten_chude!!}</a></li>
                        {{-- <li><a href="#tab_2">Chủ đề 2</a></li>
                        <li><a href="#tab_3">Chủ đề 3</a></li> --}}
                    @endif
                @endforeach
            </ul>
        {{-- End Tab Header --}}

        {{-- Tab nội dung Content --}}
            @foreach($theloai as $tl)
                @if($tl->id_contest == $ct->id)
                    <div class="col-lg-12" id="tab_{{$tl->id}}">
                        <!-- Title -->
                        <h3><span><img src="images/info.png"></span><b>THỂ LỆ: Chủ đề {!!$tl->Ten_chude!!}</b></h3>
                        
                        <h4><span></span><b>{{$ct->Ten}}</b></h4>
                        
                        {{-- Nội dung Thể lệ --}}
                        <p>
                            <b>I. MỤC ĐÍCH:  <br></b>              
                                {!!$tl->Mucdich!!}
                        </p>
                        <p>
                            <b>II. ĐỐI TƯỢNG DỰ THI:  <br></b>              
                                {!!$tl->Doituong!!}
                        </p>
                        <p>
                            <b>III. NỘI DUNG:  <br></b>              
                                {!!$tl->Noidung!!}
                        </p>
                        <p>
                            <b>IV. THỂ LỆ DỰ THI:  <br></b>              
                                {!!$tl->Thele!!}
                        </p>
                        <p>
                            <b>V. QUY ĐỊNH CHUNG:  <br></b>              
                                {!!$tl->Quydinh!!}
                        </p>
                        <p>
                            <b>VI. TIÊU CHÍ ĐÁNH GIÁ:  <br></b>              
                                {!!$tl->Tieuchi!!}
                        </p>
                        <p>
                            <b>VII. CƠ CẤU GIẢI THƯỞNG:  <br></b>              
                                {!!$tl->Giaithuong!!}
                        </p>
                        <p>
                            <b>VIII. HÌNH THỨC VÀ QUY CÁCH:  <br></b>              
                                {!!$tl->Quycach!!}
                        </p>
                        <p>
                            <b>IX. PHƯƠNG THỨC NỘP SẢN PHẨM:  <br></b>              
                                {!!$tl->Phuongthuc!!}
                        </p>
                        <p>
                            <b>X. THỜI HẠN DỰ THI:</b><br>
                            
                            - Nhận tác phẩm: {{$Date_begin}} - {{$Date_end}} <br>
                            - Chấm tác phẩm: {{$Date_recive}} - {{$Date_result}} <br>
                            - Thông báo kết quả: {{$Date_result}} <br>
                            - Trao giải thưởng: {{$Date_award}} (sau 07 ngày)
                        </p>
                        <p>
                            <b>XI. BAN TỔ CHỨC </b><br>
                                {!!$ct->Bantochuc!!}
                        </p>
                        <p>
                            <b>XII. BAN GIÁM KHẢO </b><br>
                                {!!$ct->Bangiamkhao!!}
                        </p>
                        <p>
                            <b>THÔNG TIN LIÊN HỆ BAN TỔ CHỨC </b><br>
                            Thầy Dũng, mobile phone: 0903 100 550 - Email: hungdung@ctu.edu.vn
                        </p>
                        <p class="ui-icon-link">
                            <a href="files/pdf/{{$tl->Thele_pdf}}"><span><i class="icon-download-outline"></i></span><u>Tải về tập tin thể lệ</u>: <i>{{$tl->Thele_pdf}}</i></a>
                        </p>
                    </div>
                @endif
            @endforeach
        </div>
        {{-- End Tab nội dung Content --}}

    {{-- End Tab --}}
    
        {{-- Test Ajax --}}
        {{-- <div id="View_ChuDe" > --}}
            {{-- Nội dung Ajax --}}
        {{-- </div> --}}
        {{-- End Test Ajax --}}

{{-- Intro Sidebar Right --}}
        
    <div class="intro-grid color-3" >
        <span class="icon"><i class="icon-clock3"></i></span>
        <h3>KHÓA SỔ NHẬN</h3>
        <p><h2>{{$Date_view}} 23:59</h2></p>
        @php
            $countUser = 0;
            $countTacPham = count($tacpham);
            foreach ($user as $u){
                if ($u->quyen == 0) $countUser++;
            }
            
        @endphp
        <p><h4><i>Đã có &nbsp; <b>{{$countUser}}</b> &nbsp; Tác giả,  &nbsp; <b>{{$countTacPham}}</b> &nbsp; Tác phẩm</i></h4></p>
        <p><h3><span id="Countdown_text"></span></h3></p>
    </div>

    <div class="intro-grid color-1">
        <span class="icon"><i class="icon-calendar3"></i></span>
        
        <h3>THỜI GIAN</h3>
        <p>		
            - Nhận ảnh: {{$Date_begin}} - {{$Date_end}} <br>
            - Chấm ảnh: {{$Date_end}} - {{$Date_result}} <br>
            - Thông báo kết quả: {{$Date_result}} <br>
            - Trao giải thưởng: {{$Date_award}} (sau 07 ngày)
        </p>
        <a href="thele" class="btn btn-primary">Chi tiết</a>
    </div>

    <div class="intro-grid color-2">
        <span class="icon"><i class="icon-wallet2"></i></span>
        <h3>THỂ LỆ CUỘC THI</h3>
            <p>{!!$ct->Thele_tomtat!!}</p>
        <a href="thele" class="btn btn-primary">Chi tiết</a>
    </div>
        
{{-- End Intro Sidebar Right --}}     

    </div>
    <!-- /.row -->
</div>

@section('script')
    

<script>
// Đếm ngược thời gian
    var countDownDate = new Date("{{$ct->Date_end}}").getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        days = (days < 10) ? "0"+days : days;
        hours = (hours < 10) ? "0"+hours : hours;
        minutes = (minutes < 10) ? "0"+minutes : minutes;
        seconds = (seconds < 10) ? "0"+seconds : seconds;

        document.getElementById("Countdown_text").innerHTML = "<table class='countdownView'><tr class='numberView'><th>" + days + "<th>&nbsp;:&nbsp;</th></th><th>" + hours + "<th>&nbsp;:&nbsp;</th></th><th>" + minutes + "<th>&nbsp;:&nbsp;</th></th><th>" + seconds +"</th></tr><tr class='labelView'><td>NGÀY</td><td>&nbsp;</td><td>GIỜ</td><td>&nbsp;</td><td>PHÚT</td><td>&nbsp;</td><td>GIÂY</td></tr></table>"
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("Countdown_text").innerHTML = "ĐÃ HẾT THỜI GIAN NHẬN TÁC PHẨM";
        }
    }, 1000);
//-- End Hiện thời gian đếm ngược 

    // Các Tabs Thể loại
    // $('#Tabs_TheLoai').tabs();
    
    // Ajax Chủ đề
    // $(document).ready(function(){
    //         $("#ChuDe").change(function(){
    //             var idChuDe = $(this).val();
    //             $.get("ajax/thele/" + idChuDe, function(data){
    //                 // alert(data);
    //                 $("#View_ChuDe").html(data);
    //             });
    //             // alert(idChuDe);
    //         });
    //     });

    // TABS
    $(document).ready(function(){
            $('#tab_ChuDe').tabs();
        });
    
</script>

@endsection

@endforeach

@endsection