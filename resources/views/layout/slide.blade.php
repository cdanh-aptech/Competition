
<aside id="qbootstrap-hero">
	<div class="flexslider">
		<ul class="slides">
		@foreach($contest as $ct)
			@foreach($slide as $sl)
				@if($sl->id_contest == $ct->id)
					<li style="background-image: url(images/slide/{{$sl->Hinh}});">
						<div class="overlay"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">
										<a href="{{$sl->link}}"><h1><strong>{{$ct->Ten}}</strong></h1></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				@endif
			@endforeach
		@endforeach
	</div>
</aside>