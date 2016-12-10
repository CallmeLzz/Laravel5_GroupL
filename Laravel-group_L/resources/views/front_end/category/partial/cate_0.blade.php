<div class="type_16_cate_0">
	<div style="" class="vc_row wpb_row vc_row-fluid">
	@if(isset($cate))
		@foreach($cate as $key => $value)
			@if($key == 2)
				<div class="wpb_column vc_column_container vc_col-sm-6">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="wpb_text_column wpb_content_element ">
								<div class="wpb_wrapper">
									<h2 id="view" class="text-uppercase text-center" style="text-align: center;">
										<small>STARTING AT $120 / NIGHT</small>
										{{ $value['category_title'] }}
									</h2>
									<p style="text-align: center;">
										<img class="aligncenter wp-image-698 size-full" src="../{{ $value['category_image'] }}" alt="content-rooms-1">
									</p>
									<p style="text-align: center;">
										{{ $value['category_description'] }}
									</p>
									<p style="text-align: center;">
										<a class="btn btn-inline" href="#">Book the {{ $value['category_title'] }} Now</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			@elseif($key == 3)
				<div class="wpb_column vc_column_container vc_col-sm-6">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="wpb_text_column wpb_content_element ">
								<div class="wpb_wrapper">
									<h2 id="sideview" class="text-uppercase text-center" style="text-align: center;">
										<small>STARTING AT $120 / NIGHT</small>
										{{ $value['category_title'] }}
									</h2>
									<p style="text-align: center;">
										<img class="aligncenter wp-image-695 size-full" src="../{{ $value['category_image'] }}" alt="content-rooms">
									</p>
									<p style="text-align: center;">
										{{ $value['category_description'] }}
									</p>
									<p style="text-align: center;">
										<a class="btn btn-inline" href="#">Book the {{ $value['category_title'] }} Now</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endif
		@endforeach
	@endif
	</div>
</div>