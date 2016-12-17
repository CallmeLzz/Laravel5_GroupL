<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Add Price </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            {!! Form::open(['route' => 'addFeature', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                <tr>
                    <th>Type</th>
                    <td>
                        {!! Form::select('type', $cate_default, 'default', array('id' => 'category-type')) !!}
                    </td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>
                        <select name="title" id="detailcategory">
                        @if(isset($detail_default))
                            @foreach($detail_default as $value)
                                <option value="{{ $value['detail_title'] }}"> {{ $value['detail_title'] }} </option>
                            @endforeach
                        @endif
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>{!! Form::text('content', null, array('autofocus')) !!}
                </tr>
                <tr>
                    <th>Operations</th>
                    <td>{!! Form::submit('Add') !!}</td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>