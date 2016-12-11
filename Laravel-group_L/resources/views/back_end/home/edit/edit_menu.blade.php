<div class="admin-content">
    <div class="main">
    <h3> Home Page - Update Menu </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Level</th>
                <th>Operations</th>
            </tr>
            @if(isset($menu))
                @foreach($menu as $value)
                <form action="{{ route('editMenu') }}">
                    <tr>
                        <td>{{ $value['menu_id'] }}</td>
                        <td hidden="true"><input type="text" name="menu_id" value="{{ $value['menu_id'] }}" hidden=""></td>
                        <td><input type="text" name="menu_title" value="{{ $value['menu_title'] }}" autofocus></td>
                        <td><input type="text" name="menu_level" value="{{ $value['menu_level'] }}"></td>
                        <td><input type="submit" value="Update"></td>
                    </tr>
                </form>
                @endforeach
            @endif
        </table>
    </div>
</div>