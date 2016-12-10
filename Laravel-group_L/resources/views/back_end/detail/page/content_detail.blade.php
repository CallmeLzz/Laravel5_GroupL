<div class="admin-content">
    <div class="main">
    <h3> Detail Page </h3>
        <label> DETAIL </label>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Brief Desciption</th>
                <th>Full Desciption</th>
                <th>Images</th>
                <th>Operations</th>
            </tr>
        @if(isset($detail))
            @foreach($detail as $value)
            <tr>
                <td>{{ $value['detail_id'] }}</td>
                <td>{{ $value['detail_title'] }}</td>
                <td>{{ substr($value['detail_brief_description'], 0, 80) }}...</td>
                <td>{{ substr($value['detail_full_description'], 0, 80) }}...</td>
                <td><img class="img_zoom" src="../{{ $value['detail_image'] }}"></td>
                <td>
                    <a href="{{ route('editDetailView') }}?id={{ $value['detail_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <button class="btn btn-danger pull left submitDelete" source="{{ route('deleteDetail') }}?id={{ $value['detail_id'] }}">Delete</button>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    </div>
</div>