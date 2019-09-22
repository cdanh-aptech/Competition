
<div id="qbootstrap-intro">
	<div class="row">
		<div class="intro animate-box">
		@foreach($contest as $ct)	
			<div class="intro-grid color-1">
				<span class="icon"><i class="icon-calendar3"></i></span>
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
				<h3>THỜI GIAN</h3>
				<p>		
					- Nhận tác phẩm: {{$Date_begin}} - {{$Date_end}} <br>
				</p>
				<p>
					- Chấm tác phẩm: {{$Date_recive}} - {{$Date_result}} <br>
				</p>
				<p>
					- Thông báo kết quả: {{$Date_result}} <br>
				</p>
				<p>
					- Trao giải thưởng: {{$Date_award}} (sau 07 ngày)
				</p>
				<a href="thele" class="btn btn-primary">Chi tiết</a>
			</div>
			<div class="intro-grid color-2">
				<span class="icon"><i class="icon-wallet2"></i></span>
				<h3>THỂ LỆ CUỘC THI</h3>
					<p>{!!$ct->Thele!!}</p>
				<a href="thele" class="btn btn-primary">Chi tiết</a>
			</div>
		
			<div class="intro-grid color-3" >
				<span class="icon"><i class="icon-clock3"></i></span>
				
				<h3>KHÓA SỔ NHẬN TÁC PHẨM</h3>
				<p><h2>{{$Date_view}} 23:59</h2></p>
				@php
					$countUser = 0;
					$countTacPham = 0;
					foreach ($tacpham as $tp)
						if ($tp->contest->id == $ct->id)
							$countTacPham++;
					foreach ($user as $u){
						if ($u->quyen == 0) $countUser++;
					}
					
				@endphp
				<p><h4><i>Đã có &nbsp; <b>{{$countUser}}</b> &nbsp; Tác giả,  &nbsp; <b>{{$countTacPham}}</b> &nbsp; Tác phẩm</i></h4></p>
				<p><h3><span id="Countdown_text"></span></h3></p>
				
				
			</div>
		
		</div>
	</div>
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
            document.getElementById("Countdown_text").innerHTML = "ĐÃ HẾT THỜI GIAN NHẬN<br> TÁC PHẨM";
        }
	}, 1000);
	
</script>
{{-- End Hiện thời gian đếm ngược --}}
@endforeach