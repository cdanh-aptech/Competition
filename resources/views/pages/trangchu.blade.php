@extends('layout.index')

@section('title')
    Trang chủ
@endsection

@section ('content')

    <!-- Slide--> 
    @include('layout.slide')
    <!-- End Slide-->

    <!-- Intro--> 
    @include('layout.intro')
    <!-- End Intro-->

    <!-- Dich vu -->
    @include('layout.service')
    <!-- End Dich vu -->

 @endsection

 {{-- @section('script')
    
    <script>
        // countdown('2019/9/17', ['days', 'hours', 'minutes', 'seconds'], function(){
        //     console.log('done');
        // }) 10/16/2019 23:59:00

        
    var countDownDate = new Date("10/25/2019 23:59:00").getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("St_Countdown_text").innerHTML = "25-10-2019 23:59<br>" + days + " NGÀY " + hours + " GIỜ " + minutes + " PHÚT " + seconds + " GIÂY";
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("St_Countdown_text").innerHTML = "ĐÃ HẾT THỜI GIAN NHẬN ẢNH";
        }
    }, 1000);

    </script>
 @endsection --}}
