<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Add Price </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            {!! Form::open(['route' => 'addPrice', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                <tr>
                    <th>Price Rate</th>
                    <td>{!! Form::text('rate', null, array('autofocus')) !!}
                </tr>
                <tr>
                    <th>Type</th>
                    <td>
                        {!! Form::select('type', $cate, 'default', array('id' => 'category-type')) !!}
                    </td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td>
                        <select name="detail" id="detailcategory">
                        @if(isset($detail))
                            @foreach($detail as $value)
                                <option value="{{ $value['detail_title'] }}"> {{ $value['detail_title'] }} </option>
                            @endforeach
                        @endif
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Operations</th>
                    <td>{!! Form::submit('Add') !!}</td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>