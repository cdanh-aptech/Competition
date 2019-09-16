
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
				<a href="#" class="btn btn-primary">Chi tiết</a>
			</div>
			<div class="intro-grid color-2">
				<span class="icon"><i class="icon-wallet2"></i></span>
				<h3>THỂ LỆ CUỘC THI</h3>
					<p>{!!$ct->Thele_tomtat!!}</p>
				<a href="#" class="btn btn-primary">Chi tiết</a>
			</div>
		
			<div class="intro-grid color-3" >
				<span class="icon"><i class="icon-clock3"></i></span>
				
				<h3>NGÀY HẾT HẠN NHẬN ẢNH</h3>
				<p><h2>{{$Date_view}} 23:59</h2></p>
				@php
					$countUser = 0;
					$countTacPham = count($tacpham);
					foreach ($user as $u){
						if ($u->quyen == 0) $countUser++;
					}
					
				@endphp
				<p><h4><i>Đã có {{$countUser}} tác giả và {{$countTacPham}} tác phẩm</i></h4></p>
				<p><h3 id="St_Countdown_text"></h3></p>
				
				
			</div>
		
		</div>
	</div>
</div>
<script>
        // countdown('2019/9/17', ['days', 'hours', 'minutes', 'seconds'], function(){
        //     console.log('done');
        // }) 10/16/2019 23:59:00
    var countDownDate = new Date("{{$ct->Date_end}}").getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		document.getElementById("St_Countdown_text").innerHTML = "<div><table class='countdownView'><tr class='numberView'><th>" + days + " : </th><th>&nbsp;" + hours + " : </th><th>&nbsp;" + minutes + " : </th><th>&nbsp;" + seconds +"</th></tr><tr class='labelView'><td>NGÀY</td><td>GIỜ</td><td>PHÚT</td><td>GIÂY</td></tr></table></div>"
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("St_Countdown_text").innerHTML = "ĐÃ HẾT THỜI GIAN NHẬN ẢNH";
        }
	}, 1000);
	
</script>

@endforeach