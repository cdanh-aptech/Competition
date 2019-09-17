
<nav class="qbootstrap-nav" role="navigation" id="page">
		<div class="top-menu">
			<div class="container-fluid">
				<div class="row">
					<!-- Menu Nav-->
					<div class="col-lg-12 text-center navbar-inverse navbar-fixed-top">
							<div class="menu-1">
								<ul>
									<li class="btn-cta">
										<a href="trangchu">
											<span><i class="icon-home-outline"></i>
												TRANG CHỦ
											</span>
										</a>
									</li>
									
									<li><a href="thele">THỂ LỆ</a></li>
									
									@php
										if(Auth::check())
										{
											$user_login = Auth::user();
										}
									@endphp
									@if(!isset($user_login))
										<li><a href="dangky">ĐĂNG KÝ THAM GIA</a></li>
										<li><a href="dangnhap">ĐĂNG NHẬP</a></li>
									@else
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="tacgia" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span><i class="icon-user2"></i>{{$user_login->Ten}}</span>
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="tacgia">Thông tin</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="tacpham">Tác phẩm</a>
										</div>
									</li>
										<li>
											<a href="dangxuat">ĐĂNG XUẤT<span><i class="icon-arrow-right"></i></a>
										</li>
									@endif
								</ul>
							</div>
					</div>
					<!--   -->
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-3 text-center">
										<div class="num">
											<span class="icon"><i class="icon-phone"></i></span>
											<p><a href="#">Tel: 0292.3835.581</a><br><a href="#">Zalo: 058 213 1345</a></p>
										</div>
								</div>
								<div class="col-md-6 text-center">
									<!--
									<div id="qbootstrap-logo"><a href="index.html"><i class="icon-plus-outline"></i>Med<span>care</span></a></div>
									-->
										<a href="https://cusc.ctu.edu.vn/">
											<img class="img_logo" src="images/logo_cusc.png" alt="">
										</a>
										<a href="https://aptech.cusc.vn/">
											<img class="img_logo" src="images/logo_aptech.png" alt="">
										</a>
										<a href="https://arena.cusc.vn/">
											<img class="img_logo" src="images/logo_arena.png" alt="">
										</a>
								</div>
								
								<div class="col-md-3 text-center">
									<div class="loc">
										<span class="icon"><i class="icon-location"></i></span>
										<p><a href="#">Số 1 đường Lý Tự Trọng <br> Quận Ninh Kiều, Thành phố Cần Thơ</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
</nav>
