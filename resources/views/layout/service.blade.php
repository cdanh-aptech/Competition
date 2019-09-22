<div id="qbootstrap-services">
    <div class="container">
        @foreach($contest as $ct)
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-0 text-center qbootstrap-heading">
                <h2><b>{{$ct->Ten}}</b></h2>
                </div>
            </div>
            <div class="row">
                {{-- Cơ cấu giải thưởng --}}
                <div class="col-md-6 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-params"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">CƠ CẤU GIẢI THƯỞNG</a></h3>
                            <p class="lead">{!!$ct->Giaithuong!!}</p>
                        </div>
                    </div>
                </div>
                {{-- Hỗ trợ gửi ảnh --}}
                <div class="col-md-6 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-upload"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">PHƯƠNG THỨC THAM GIA</a></h3>
                            <p class="lead">{!!$ct->Phuongthuc!!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- Hội đồng giám khảo --}}
                <div class="col-md-6 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-group"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">HỘI ĐỒNG GIÁM KHẢO</a></h3>
                            {{-- @foreach($bantochuc as $btc)
                                @if($btc->id_contest == $ct->id) --}}
                                    <p class="lead">{!!$ct->Bangiamkhao!!}</p>
                                {{-- @endif
                            @endforeach --}}
                        </div>
                    </div>
                </div>
                {{-- Ban tổ chức --}}
                <div class="col-md-6 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-flow-merge"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">BAN TỔ CHỨC</a></h3>
                            {{-- @foreach($bantochuc as $btc)
                                @if($btc->id_contest == $ct->id) --}}
                                    <p class="lead">{!!$ct->Bantochuc!!}</p>
                                {{-- @endif
                            @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
