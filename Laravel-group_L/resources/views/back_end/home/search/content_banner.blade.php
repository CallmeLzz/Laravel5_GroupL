<div class="admin-content">
    <div class="main">
        <!-- <div>
            <a href="addView" class="btn btn-danger pull left" style="margin-right:3px;">Add</a>
        </div> -->
        <h3> Result Search Banner Page </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Type</th>
                <th>Operations</th>
            </tr>
            @if(isset($searchBanner))
                @if(is_string($searchBanner))
                    <label><font color="red"><?php echo $searchBanner; ?></font></label>
                @else
                    @foreach($searchBanner as $value)
                    <tr>
                        <td>{{ $value['banner_id'] }}</td>
                        <td>{{ $value['banner_title'] }}</td>
                        <td><img src="{{ asset($value['banner_img']) }}"></td>
                        <td>{{ $value['banner_type'] }}</td>
                        <td>
                            <a href="{{ route('editBannerView') }}?id={{ $value['banner_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                            <a href="{{ route('deleteBanner') }}?id={{ $value['banner_id'] }}" class="btn btn-danger pull left" style="margin-right:3px;">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            @endif
        </table>
    </div>
</div>