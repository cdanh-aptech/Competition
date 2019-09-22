
<nav class="qbootstrap-nav" role="navigation" id="page">
	<div class="top-menu">
		<div class="container-fluid">
			<div class="row">
				<!-- Menu Nav-->
				<div class="col-lg-12 text-center navbar-inverse navbar-fixed-top">
					<div class="menu-1">
						<ul>
							<div class="col-lg-6 text-left">
								<li class="btn-cta">
									<a href="trangchu">
										<span><i class="icon-home-outline"></i>
											TRANG CHỦ
										</span>
									</a>
								</li>
								{{-- <li>
									<a href="thele">
										<span><i class="icon-info-outline"></i>
											THỂ LỆ CUỘC THI
										</span>
									</a>
								</li> --}}
								<li class="nav-item dropdown">
									<a  href="thele">
											<span><i class="icon-info-outline"></i> THỂ LỆ CUỘC THI
									</a>
									{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown" aria-expanded="true">
										<p>
										@foreach($theloai as $tl)
											<a class="dropdown-item" href="#"> {{$tl->Ten}}</a><br>
										@endforeach
										</p>
									</div> --}}
								</li>
								<li>
									<a href="thongke">
										<span><i class="icon-th-list-outline"></i>
											TÁC GIẢ
										</span>
									</a>
								</li>
							</div>
							
							<div class="col-lg-6 text-right">
								@php
									if(Auth::check())
									{
										$user_login = Auth::user();
									}
								@endphp
								@if(!isset($user_login))
									<li>
										<a href="dangky">
											<span><i class="icon-user-add-outline"></i>ĐĂNG KÝ
											</span>
										</a>
									</li>
									<li><a href="dangnhap"><span>ĐĂNG NHẬP</span></a></li>
								@else
								
								<li>
									<a href="tacpham">
										<span><i class="icon-image-outline"></i>TÁC PHẨM DỰ THI
										</span>
									</a>
								</li>
								<li>
									<a href="tacgia">
										<span><i class="icon-user-outline"></i>{{$user_login->Ten}}
										</span>
									</a>
								</li>
								<li>
									<a href="dangxuat">
										<span>ĐĂNG XUẤT<i class="icon-arrow-right"></i>
										</span>
									</a>
								</li>

								{{-- <li class="nav-item dropdown">
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
								</li> --}}

								@endif
							</div>
							
						</ul>
					</div>
				</div>
				<!-- Lề trên cùng TOP  -->
				<div class="col-lg-12">
					<div class="top"></div>
				</div>
			</div>
		</div>
	</div>
</nav>
