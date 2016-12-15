<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Update </h3>
        <table style="width: 100%">
            @if(isset($price))
                @foreach($price as $value)
                    {!! Form::open(['route' => 'editPrice', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                        <tr>
                            <th>ID</th>
                            <td>{{ $value['price_id'] }}</td>
                        </tr>
                        <tr>
                            {!! Form::text('id', $value->price_id, array('hidden')) !!}
                            <th>Rate ($)</th>
                            <td>{!! Form::text('rate', $value->price_rate) !!}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{!! Form::select('type', 
                                array($value->price_type => $value->price_type) + $default_type,
                                'default', array('id' => 'category-type')) !!}</td>
                        </tr>
                        <tr>
                            <th>Current Detail</th>
                            <td>{!! $value['price_detail'] !!}</td>
                            
                        </tr>
                        <tr>
                            <th>Change Detail</th>
                            <td>
                                <select name="detail" id="detailcategory">
                                @if(isset($detail_title))
                                    @foreach($detail_title as $value)
                                        <option value="{{ $value['detail_title'] }}"> {{ $value['detail_title'] }} </option>
                                    @endforeach
                                @endif
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Operations</th>
                            <td>{!! Form::submit('Update') !!}</td>
                        </tr>
                    {!! Form::close() !!}
                @endforeach
            @endif
        </table>
    </div>
</div>