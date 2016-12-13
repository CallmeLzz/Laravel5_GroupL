<div class="admin-content">
    <div class="main">
    <h3> Home Page - Update Banner </h3>
        <table style="width: 100%">
            @if(isset($banner))
                @foreach($banner as $value)
                <!-- <form method="POST" action="{{ route('editBanner') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form> -->
                {!! Form::open(['route' => 'editBanner', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    {!! Form::text('id', $value->banner_id, array('hidden')) !!}
                    <tr>
                        <th>Title</th>
                        <td>{!! Form::text('title', $value->banner_title, array('autofocus')) !!}</td>
                    </tr>
                    <tr>
                        <th>Images</th>
                        <td><img src="{{ asset($value['banner_img']) }}"></td>
                    </tr>
                    <tr>
                        <th>Change Images</th>
                        <td>{!! Form::file('fileToUpload') !!}</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        @if($value->banner_type == 'home')
                            <td>{!! Form::select('type', array(
                                    $value->banner_type => ucwords($value->banner_type),
                                    'category' => 'Category',
                                    'detail' => 'Detail'
                                    ))
                                !!}
                            </td>
                        @elseif($value->banner_type == 'category')
                            <td>{!! Form::select('type', array(
                                    $value->banner_type => ucwords($value->banner_type),
                                    'home' => 'Home',
                                    'detail' => 'Detail'
                                    ))
                                !!}
                            </td>
                        @else
                            <td>{!! Form::select('type', array(
                                    $value->banner_type => ucwords($value->banner_type),
                                    'category' => 'Category',
                                    'home' => 'Home'
                                    ))
                                !!}
                            </td>
                        @endif
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