@if(isset($banner))
	<div class="banner owl-carousel owl-theme">
		@foreach($banner as $value)
		    <div class="item">
		        <img src="{{ asset($value['banner_img']) }}">
		    </div>
    	@endforeach
	</div>
@endif