<div class="admin-content">
    <div class="main">
        <!-- <div>
            <a href="addView" class="btn btn-danger pull left" style="margin-right:3px;">Add</a>
        </div> -->
        <h3> Result Search Price Page </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Rate</th>
                <th>Type</th>
                <th>Detail</th>
                <th>Operations</th>
            </tr>
            @if(isset($searchPrice))
                @if(is_string($searchPrice))
                    <label><font color="red"><?php echo $searchPrice; ?></font></label>
                @else
                    @foreach($searchPrice as $value)
                    <tr>
                        <td>{{ $value['price_id'] }}</td>
                        <td>{{ $value['price_rate'] }}</td>
                        <td>{{ $value['price_type'] }}</td>
                        <td>{{ $value['price_detail'] }}</td>
                        <td>
                            <a href="{{ route('editCategoryView') }}?id={{ $value['category_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                            <a href="{{ route('deleteCategory') }}?id={{ $value['category_id'] }}" class="btn btn-danger pull left" style="margin-right:3px;">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            @endif
        </table>
    </div>
</div>