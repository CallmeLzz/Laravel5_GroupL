<div class="admin-content">
    <div class="main">
    <h3> Category Page </h3>
        <label> FEATURE: </label>
        <a href="{{ URL::route('addCategoryView') }}" 
            class="btn btn-info pull left" style="margin-right:3px;">Add</a>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Desciption</th>
                <th>Type</th>
                <th>Images</th>
                <th>Operations</th>
            </tr>
        @if(isset($cate))
            @foreach($cate as $value)
            <tr>
                <td>{{ $value['category_id'] }}</td>
                <td>{{ $value['category_title'] }}</td>
                <td>{{ substr($value['category_description'], 0, 80) }}...</td>
                <td>{{ $value['category_type'] }}</td>
                <td><img class="img_zoom" src="../{{ $value['category_image'] }}"></td>
                <td>
                    <a href="{{ route('editCategoryView') }}?id={{ $value['category_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <button class="btn btn-danger pull left submitDelete" source="{{ route('deleteCategory') }}?id={{ $value['category_id'] }}">Delete</button>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    </div>
</div>