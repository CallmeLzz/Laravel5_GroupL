<div class="detail-1 container">
    <div class="row">
    @if(isset($detail))
        @foreach($detail as $value)
        <div class="col-sm-6">
            <img src="../{{ $value['detail_image'] }}" alt="content-room">
        </div>
        <div class="col-sm-6">
            <div class="paragraph">
                <p>{{ $value['detail_brief_description'] }}</p>
                <h3>{{ $value['detail_title'] }}</h3>
                <p class="lead">{{ $value['detail_full_description'] }}</p>
            </div>
        </div>
        @endforeach
    @endif
    </div>
</div>