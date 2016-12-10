<div class="admin-content">
    <div class="main">
        <table style="width: 100%">
            @if(isset($banner))
                @foreach($banner as $value)
                <form method="POST" action="{{ route('editBanner') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <td hidden="true"><input type="text" name="id" value="{{ $value['banner_id'] }}" hidden=""></td>
                    <tr>
                        <th>Title</th>
                        <td><input type="text" name="title" value="{{ $value['banner_title'] }}" autofocus></td>
                    </tr>
                    <tr>
                        <th>Images</th>
                        <td><img src="../{{ $value['banner_img'] }}"></td>
                    </tr>
                    <tr>
                        <th>Change Images</th>
                        <td><input type="file" name="fileToUpload"></td>
                        
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>
                            <select name="type">
                                @if($value['banner_type'] == null)
                                    <option value="home">Home</option>
                                    <option value="category">Category</option>
                                    <option value="detail">Detail</option>
                                @elseif($value['banner_type'] == 'home')
                                    <option value="home">{{ ucwords($value['banner_type']) }}</option>
                                    <option value="category">Category</option>
                                    <option value="detail">Detail</option>
                                @elseif($value['banner_type'] == 'category')
                                    <option value="home">Home</option>
                                    <option value="category">{{ ucwords($value['banner_type']) }}</option>
                                    <option value="detail">Detail</option>
                                @else
                                    <option value="home">Home</option>
                                    <option value="category">Category</option>
                                    <option value="detail">{{ ucwords($value['banner_type']) }}</option>
                                @endif
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Operations</th>
                        <td><input type="submit" value="Update"></td>
                    </tr>
                </form>
                @endforeach
            @endif
        </table>
    </div>
</div>