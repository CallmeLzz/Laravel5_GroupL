<div class="admin-content">
    <div class="main">
    <h3> Detail Page </h3>
        <table>
            <tr>
                <label> FEATURE: </label>
                <a href="{{ URL::route('addPriceView') }}" 
                    class="btn btn-info pull left" style="margin-right:3px;">Add</a>
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
                <th>Rate</th>
                <th>Type</th>
                <th>Operations</th>
            </tr>
        @if(isset($price))
            @foreach($price as $value)
            <tr>
                <td>{{ $value['price_id'] }}</td>
                <td>{{ $value['price_title'] }}</td>
                <td>${{ $value['price_rate'] }}</td>
                <td>{{ $value['price_type'] }}</td>
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
            @if($price->currentPage() == 1)
                <li class="disabled"><a href="#">&laquo;</a></li>
            @else
                <?php $index = $price->currentPage(); $index--; ?>
                <li><a href="{{ URL::route('adminDetail') }}?page={{ $index }}">&laquo;</a></li>
            @endif
                @while($i <= $price->lastPage())
                    @if($price->currentPage() == $i)
                        <li class="disabled"><a href="{{ URL::route('adminDetail') }}?page={{ $i }}">{{ $i }}</a></li>
                    @else
                        <li><a href="{{ URL::route('adminDetail') }}?page={{ $i }}">{{ $i }}</a></li>
                    @endif
                    <?php $i++; ?>
                @endwhile
            @if($price->currentPage() == $price->lastPage())
                <li class="disabled"><a href="#">&raquo;</a></li>
            @else
                <?php $index = $price->currentPage(); $index++; ?>
                <li><a href="{{ URL::route('adminDetail') }}?page={{ $index }}">&raquo;</a></li>
            @endif
        </ul>
    <!-- ========================================================================================== -->
    </div>
</div>