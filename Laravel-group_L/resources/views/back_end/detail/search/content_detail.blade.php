<div class="admin-content">
    <div class="main">
        <!-- <div>
            <a href="addView" class="btn btn-danger pull left" style="margin-right:3px;">Add</a>
        </div> -->
        <h3> Result Search Detail Page </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Brief Desciption</th>
                <th>Full Desciption</th>
                <th>Images</th>
                <th>Type</th>
                <th>Operations</th>
            </tr>
            @if(isset($searchDetail))
                @if(is_string($searchDetail))
                    <label><font color="red"><?php echo $searchDetail; ?></font></label>
                @else
                    @foreach($searchDetail as $value)
                    <tr>
                        <td>{{ $value['detail_id'] }}</td>
                        <td>{{ $value['detail_title'] }}</td>
                        <td>{{ substr($value['detail_brief_description'], 0, 80) }}</td>
                        <td>{{ substr($value['detail_full_description'], 0, 80) }}</td>
                        <td><img src="{{ asset($value['detail_image']) }}"></td>
                        <td>{{ $value['detail_type'] }}</td>
                        <td>
                            <a href="{{ route('editDetailView') }}?id={{ $value['detail_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                            <button class="btn btn-danger pull left submitDelete" source="{{ route('deleteDetail') }}?id={{ $value['detail_id'] }}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                @endif
            @endif
        </table>
    </div>
</div>