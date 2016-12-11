<div class="type-45">
    <div id="page-heading">
    @if(isset($banner))
        @foreach($banner as $value)
        <div style="background: url(../{{ $value['banner_img'] }});
            background-size: cover; 
            background-position: center top;
            width:100%; 
            padding:100px; ">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text">
                        <h1 style="font-weight: 400;
                            /* margin: 15px; */
                            margin-top: 105px;
                            padding: 0px;
                            color: white;
                            ">{{ $value['banner_title'] }}</h1>
                        <p style="color: rgba(97, 104, 115, 0.63);
                           font-size: 20px;
                           margin-top: -2px;
                           ">Starting at $120</p>
                    </div>
                </div>
            </div>
        </div> 
        @endforeach
    @endif
    </div>
</div>