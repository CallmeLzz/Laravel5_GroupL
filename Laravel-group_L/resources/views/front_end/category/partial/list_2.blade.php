<div class="type_45">
    <div class="container">
        <div class="row">
        @if(isset($cate))
            @foreach($cate as $key => $value)
            <div class="col-md-6">
                <div class="word3">
                    <h3>{{ $value['category_title'] }}</h3>
                    <p>{{ $value['category_description'] }}</p>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="images">
                        <img src="{{ asset($value['category_image']) }}">
                    </div>
            </div>
            @endforeach
        @endif
        </div>
    </div>
</div>