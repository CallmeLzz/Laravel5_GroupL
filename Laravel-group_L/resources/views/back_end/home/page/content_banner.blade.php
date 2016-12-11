<div class="admin-content">
    <div class="main">
        <h3> Banner Page </h3>
        <label> FEATURE: </label>
        <a href="{{ URL::route('addBannerView') }}" 
            class="btn btn-info pull left" style="margin-right:3px;">Add</a>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Images</th>
                <th>Type</th>
                <th>Operations</th>
            </tr>
        @if(isset($banner))
            @foreach($banner as $value)
            <tr>
                <td>{{ $value['banner_id'] }}</td>
                <td>{{ $value['banner_title'] }}</td>
                <td><img class="img_zoom" src="../{{ $value['banner_img'] }}"></td>
                <td>{{ $value['banner_type'] }}</td>
                <td>
                    <a href="{{ route('editBannerView') }}?id={{ $value['banner_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <form action="{{ route('deleteBanner') }}">
                        <button class="btn btn-danger pull left" name="id" value="{{ $value['banner_id'] }}">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    </div>
</div>