<div class="admin-content">
    <div class="main">
    <h3> Detail Page </h3>
        <table>
            <tr>
                <label> FEATURE: </label>
                <a href="{{ URL::route('addDetailView') }}" 
                    class="btn btn-info pull left" style="margin-right:3px;">Add</a>
            </tr>
            <tr>
                <form method="GET" action="{{ URL::route('adminDetail') }}">
                    <span>SORT: </span>
                    <select name="sort">
                        <option value="id">ID</option>
                        <option value="title">Title</option>
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
                <th>Brief Desciption</th>
                <th>Full Desciption</th>
                <th>Images</th>
                <th>Type</th>
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
                <td>{{ $value['detail_type'] }}</td>
                <td>
                    <a href="{{ route('editDetailView') }}?id={{ $value['detail_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <button class="btn btn-danger pull left submitDelete" source="{{ route('deleteDetail') }}?id={{ $value['detail_id'] }}">Delete</button>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    <!-- ======================================= PAGINATION ======================================= -->
        <ul class="pagination">
            @if($detail->currentPage() == 1)
                <li class="disabled"><a href="#">&laquo;</a></li>
            @else
                <?php $index = $detail->currentPage(); $index--; ?>
                <li><a href="{{ URL::route('adminDetail') }}?page={{ $index }}">&laquo;</a></li>
            @endif
                @while($i <= $detail->lastPage())
                    @if($detail->currentPage() == $i)
                        <li class="disabled"><a href="{{ URL::route('adminDetail') }}?page={{ $i }}">{{ $i }}</a></li>
                    @else
                        <li><a href="{{ URL::route('adminDetail') }}?page={{ $i }}">{{ $i }}</a></li>
                    @endif
                    <?php $i++; ?>
                @endwhile
            @if($detail->currentPage() == $detail->lastPage())
                <li class="disabled"><a href="#">&raquo;</a></li>
            @else
                <?php $index = $detail->currentPage(); $index++; ?>
                <li><a href="{{ URL::route('adminDetail') }}?page={{ $index }}">&raquo;</a></li>
            @endif
        </ul>
    <!-- ========================================================================================== -->
    </div>
</div>