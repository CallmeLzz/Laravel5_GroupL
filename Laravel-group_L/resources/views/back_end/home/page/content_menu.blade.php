<div class="admin-content">
    <div class="main">
    <h3> Menu Page </h3>
        <label> FEATURE: </label>
        <a href="{{ URL::route('addMenu') }}" 
            class="btn btn-info pull left" style="margin-right:3px;">Add</a>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Level</th>
                <th>Operations</th>
            </tr>
        @if(isset($menu))
            @foreach($menu as $value)
            <tr>
                <td>{{ $value['menu_id'] }}</td>
                <td>{{ $value['menu_title'] }}</td>
                <td>{{ $value['menu_level'] }}</td>
                <td>
                    <a href="{{ route('editMenu') }}?id={{ $value['menu_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <button class="btn btn-danger pull left submitDelete" source="{{ route('deleteMenu') }}?id={{ $value['menu_id'] }}">Delete</button>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    </div>
</div>