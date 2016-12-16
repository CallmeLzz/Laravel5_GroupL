<div class="admin-content">
    <div class="main">
    @if(isset($cate))
        <h3> Category Page </h3>
        <table>
            <tr>
                <label> FEATURE: </label>
            </tr>
            <tr>
                <a href="{{ URL::route('addCategoryView') }}" 
                    class="btn btn-info pull left" style="margin-right:3px;">Add</a>
            </tr>
            <tr>
                <a href="{{ URL::route('exportBanner') }}" 
                    class="btn btn-info pull left" style="margin-right:3px;">Export to Excel</a>
            </tr>
            <tr>
                <form method="GET" action="{{ URL::route('adminCategory') }}">
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
                <th>Desciption</th>
                <th>Type</th>
                <th>Images</th>
                <th>Operations</th>
            </tr>
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
        </table>
    <!-- ======================================= PAGINATION ======================================= -->
        <ul class="pagination">
            @if($cate->currentPage() == 1)
                <li class="disabled"><a href="#">&laquo;</a></li>
            @else
                <?php $index = $cate->currentPage(); $index--; ?>
                <li><a href="{{ URL::route('adminCategory') }}?page={{ $index }}">&laquo;</a></li>
            @endif
                @while($i <= $cate->lastPage())
                    @if($cate->currentPage() == $i)
                        <li class="disabled"><a href="{{ URL::route('adminCategory') }}?page={{ $i }}">{{ $i }}</a></li>
                    @else
                        <li><a href="{{ URL::route('adminCategory') }}?page={{ $i }}">{{ $i }}</a></li>
                    @endif
                    <?php $i++; ?>
                @endwhile
            @if($cate->currentPage() == $cate->lastPage())
                <li class="disabled"><a href="#">&raquo;</a></li>
            @else
                <?php $index = $cate->currentPage(); $index++; ?>
                <li><a href="{{ URL::route('adminCategory') }}?page={{ $index }}">&raquo;</a></li>
            @endif
        </ul>
    <!-- ========================================================================================== -->
    @endif
    </div>
</div>