@extends('layout.index')

@section('title')
    Trang chủ
@endsection

@section ('content')

    <!-- Slide--> 
    @include('layout.slide')
    <!-- End Slide-->
@foreach($contest as $ct)

<div class="container container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <!-- Title -->
                <h3><span><img src="images/info.png"></span><b>THỂ LỆ {{$ct->Ten}}</b></h3>
            
            <!-- Author -->
            <p>
                <b>I. ĐƠN VỊ TỔ CHỨC & BẢO TRỢ  <br>
                1. BAN TỔ CHỨC</b>              
                @foreach($bantochuc as $btc)
                @if ($btc->id_contest == $ct->id)
                    {!!$btc->ThanhphanBTC!!}
                @endif
                @endforeach
            </p>
            <p>
                <b> 2. BAN GIÁM KHẢO</b>              
                @foreach($bantochuc as $btc)
                @if ($btc->id_contest == $ct->id)
                    {!!$btc->ThanhphanGK!!}
                @endif
                @endforeach
            </p>
            <p>
                <b>II. NỘI DUNG         <br>
                1. TÊN CUỘC THI </b>    <br>
                {!!$ct->Ten!!}
            </p>
            <p>
                <b>2. NỘI DUNG </b>     <br>
                {!!$ct->Noidung!!}
            </p>
            <p>
                <b>III. THỜI GIAN BIỂU </b><br>
                @php
					$Date_begin = date('d/m/Y', strtotime($ct->Date_begin));
					$Date_end = date('d/m/Y', strtotime($ct->Date_end));
					$Date_result = date('d/m/Y', strtotime($ct->Date_result));
					$Date_view = date('d-m-Y', strtotime($ct->Date_end));
					// $Date_award = $Date_result;
					// date_add($Date_award, date_interval_create_from_date_string("7 days"));
					$date=date_create($ct->Date_result);
					date_add($date,date_interval_create_from_date_string("7 days"));
					$Date_award = date_format($date,"d/m/Y");
				@endphp
                - Nhận ảnh: {{$Date_begin}} - {{$Date_end}} <br>
                - Chấm ảnh: {{$Date_end}} - {{$Date_result}} <br>
                - Thông báo kết quả: {{$Date_result}} <br>
                - Trao giải thưởng: {{$Date_award}} (sau 07 ngày)
            </p>
            <p>
                <b>IV. ĐỐI TƯỢNG DỰ THI </b><br>
                {!!$ct->Doituong!!}
            </p>
            <p>
                <b>V. QUY ĐỊNH CUỘC THI </b><br>
                {!!$ct->Thele!!}
            </p>
            <p>
                <b>VI. QUY CÁCH ẢNH DỰ THI </b><br>
                {!!$ct->Quycach!!}
            </p>
            <p>
                <b>VII. PHƯƠNG THỨC GỬI ẢNH DỰ THI </b><br>
                {!!$ct->Phuongthuc!!}
            </p>
            <p>
                <b>VIII. CƠ CẤU GIẢI THƯỞNG </b><br>
                {!!$ct->Giaithuong!!}
            </p>
            <p>
                <b>IX. THÔNG TIN LIÊN HỆ BAN TỔ CHỨC </b><br>
                Thầy Dũng, mobile phone: 0903 100 550 - Email: hungdung@ctu.edu.vn
            </p>
            
        </div>

        <!-- Blog Sidebar Right -->
        
            <div class="intro-grid color-3" >
                <span class="icon"><i class="icon-clock3"></i></span>
                @php
					$Date_begin = date('d/m/Y', strtotime($ct->Date_begin));
					$Date_end = date('d/m/Y', strtotime($ct->Date_end));
					$Date_result = date('d/m/Y', strtotime($ct->Date_result));
					$Date_view = date('d-m-Y', strtotime($ct->Date_end));
					// $Date_award = $Date_result;
					// date_add($Date_award, date_interval_create_from_date_string("7 days"));
					$date=date_create($ct->Date_result);
					date_add($date,date_interval_create_from_date_string("7 days"));
					$Date_award = date_format($date,"d/m/Y");
				@endphp
                <h3>KHÓA SỔ NHẬN ẢNH</h3>
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
                @php
                    $Date_begin = date('d/m/Y', strtotime($ct->Date_begin));
                    $Date_end = date('d/m/Y', strtotime($ct->Date_end));
                    $Date_result = date('d/m/Y', strtotime($ct->Date_result));
                    $Date_view = date('d-m-Y', strtotime($ct->Date_end));
                    // $Date_award = $Date_result;
                    // date_add($Date_award, date_interval_create_from_date_string("7 days"));
                    $date=date_create($ct->Date_result);
                    date_add($date,date_interval_create_from_date_string("7 days"));
                    $Date_award = date_format($date,"d/m/Y");
                @endphp
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
        

    </div>
    <!-- /.row -->
</div>


 {{-- Hiện thời gian đếm ngược --}}
<script>
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
            document.getElementById("Countdown_text").innerHTML = "ĐÃ HẾT THỜI GIAN NHẬN ẢNH";
        }
    }, 1000);
    
</script>
{{-- End Hiện thời gian đếm ngược --}}
@endforeach
@endsection