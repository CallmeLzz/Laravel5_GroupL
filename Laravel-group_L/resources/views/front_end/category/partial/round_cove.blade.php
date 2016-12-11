@if(isset($detail))
	@foreach($detail as $key => $value)
		@if($key == 0)
		<div class="type_16_junior_suite">
			<div id="junior_suite" class="vc_row wpb_row vc_row-fluid pic_1 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving" id="pic_2">
				<div class="wpb_column vc_column_container vc_col-sm-6">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="wpb_text_column wpb_content_element white-box content-padding">
								<div class="wpb_wrapper">
									<h2 class="text-uppercase" style="text-align: left;">
										<small>STARTING AT $150 / NIGHT&nbsp;</small>
										<a style="cursor: pointer; color: black;" 
											href="{{ URL::route('detail') }}?id={{ strtoupper($value['detail_id']) }}">
											{{ strtoupper($value['detail_title']) }}
										</a>
									</h2>
									<p>{{ $value['detail_brief_description'] }}</p>
									<ul class="list-pointer">
										<li>Cum ceteris in veneratione tui montes</li>
										<li>Fabio vel iudice vincam, sunt in culpa qui officia</li>
										<li>Gallia est omnis divisa</li>
										<li>Ut enim ad minim veniam, quis nostrud exercitation</li>
										<li>Fabio vel iudice vincam sunt</li>
									</ul>
									<p>
										<a class="btn btn-inline" href="#">Book the {{ $value['detail_title'] }} Now</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-6">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="wpb_single_image wpb_content_element vc_align_left">
								<figure class="wpb_wrapper vc_figure">
									<div class="vc_single_image-wrapper vc_box_border_grey">
										<img width="750" height="563" src="../{{ $value['detail_image'] }}" class="vc_single_image-img attachment-large" alt="content-rooms-3" sizes="(max-width: 750px) 100vw, 750px">
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
	@endforeach
@endif