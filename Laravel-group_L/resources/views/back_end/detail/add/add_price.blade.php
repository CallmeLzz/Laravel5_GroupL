<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Add Price </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            <form method="GET" action="{{ route('addDetail') }}">
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="title" value="" autofocus></td>
                </tr>
                <tr>
                    <th>Price Rate</th>
                    <td><input type="text" name="rate" value=""></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>
                        <select name="type" id="category-type">
                        @if(isset($cate))
                            @foreach($cate as $value)
                                <option value="{{ $value['category_title']}}">{{ $value['category_title']}}</option>
                            @endforeach
                        @endif
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td>
                        <select name="type" id="detailcategory">
                            <option value=""></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Operations</th>
                    <td><input type="submit" value="Add"></td>
                </tr>
            </form>
        </table>
    </div>
</div>