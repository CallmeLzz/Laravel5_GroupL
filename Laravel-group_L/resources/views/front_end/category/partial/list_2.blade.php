<div class="type_45">
    <div class="container">
        <div class="row">
        @if(isset($cate))
            @foreach($cate as $key => $value)
            <div class="col-md-6">
                <div class="word3">
                    <p style="margin-top:30px;">Unam incolunt Belgae, aliam Aquitani, tertiam. Idque Caesaris facere 
                        <br>voluntate liceret: sese habere. Quis aute iure reprehenderit in voluptate 
                        <br>velit esse. Ab illo tempore, ab est sed immemorabili. Quam temere in 
                        <br>vitiis legem.</p>
                    <h3>{{ $value['category_title'] }}</h3>
                    <p>{{ $value['category_description'] }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="images">
                        <img src="../{{ $value['category_image'] }}" style="width: 50%;" >
                    </div>
                </div>
            </div>
            @endforeach
        @endif
        </div>
    </div>
</div>