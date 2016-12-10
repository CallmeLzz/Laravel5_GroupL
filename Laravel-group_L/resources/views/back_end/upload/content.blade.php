<div class="admin-content">
    <div class="main">    
        <table style="width: 100%">
            <tr>
                <form method="POST" action="uploadFile" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <td><input type="file" name="fileToUpload"></td>
                    <td><input type="submit" value="Upload File"></td>
                </form>
            </tr>
            <tr>
            </tr>
        </table>
    </div>
</div>