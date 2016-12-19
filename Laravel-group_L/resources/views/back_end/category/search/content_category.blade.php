<div class="admin-content">
    <div class="main">
        <!-- <div>
            <a href="addView" class="btn btn-danger pull left" style="margin-right:3px;">Add</a>
        </div> -->
        <h3> Result Search Category Page </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Type</th>
                <th>Image</th>
                <th>Operations</th>
            </tr>
            @if(isset($searchCategory))
                @if(is_string($searchCategory))
                    <label><font color="red"><?php echo $searchCategory; ?></font></label>
                @else
                    @foreach($searchCategory as $value)
                    <tr>
                        <td>{{ $value['category_id'] }}</td>
                        <td>{{ $value['category_title'] }}</td>
                        <td>{{ substr($value['category_description'], 0, 100) }}</td>
                        <td>{{ $value['category_type'] }}</td>
                        <td><img src="{{ asset($value['category_image']) }}"></td>
                        <td>
                            <a href="{{ route('editCategoryView') }}?id={{ $value['category_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                            <a href="{{ route('deleteCategory') }}?id={{ $value['category_id'] }}" class="btn btn-danger pull left submitDelete" style="margin-right:3px;" source="{{ route('deleteCategory') }}?id={{ $value['category_id'] }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            @endif
        </table>
    </div>
</div>