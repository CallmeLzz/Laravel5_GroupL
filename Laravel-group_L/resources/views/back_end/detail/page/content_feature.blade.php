<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Feature </h3>
        <table>
            <tr>
                <label> FEATURE: </label>
                <a href="{{ URL::route('addFeature') }}" 
                    class="btn btn-info pull left" style="margin-right:3px;">Add</a>
                <a href="{{ URL::route('exportPrice') }}" 
                    class="btn btn-info pull left" style="margin-right:3px;">Export to Excel</a>
            </tr>
            <tr>
                <form method="GET" action="{{ URL::route('adminDetail') }}">
                    <span>SORT: </span>
                    <select name="sort">
                        <option value="id">ID</option>
                        <option value="title">Title</option>
                        <option value="rate">Rate</option>
                        <option value="type">Type</option>
                    </select>
                    <input type="submit" value="Change">
                </form>
            </tr>
        </table>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th>Content</th>
                <th>Operations</th>
            </tr>
            @if(isset($feature))
                @foreach($feature as $value)
                <tr>
                    <td> {{ $value['feature_id'] }} </td>
                    <td> {{ $value['feature_title'] }} </td>
                    <td> {{ $value['feature_type'] }} </td>
                    <td> {{ $value['feature_content'] }} </td>
                    <td>
                        <a href="{{ route('editFeature') }}?id={{ $value['feature_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                        <button class="btn btn-danger pull left submitDelete" source="{{ route('deletePrice') }}?id=1">Delete</button>
                    </td>
                </tr>
                @endforeach
            @endif
        </table>
    </div>
</div>