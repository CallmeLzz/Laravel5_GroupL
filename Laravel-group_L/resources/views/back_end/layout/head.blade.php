<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/admin/admin.less', 'css/admin/admin.css');
?>
                                <!--StyleSheets-->
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/admin/admin.css')}}">
                                <!--JavaScripts-->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dialog.js')}}"></script>
<script type="text/javascript" src="{{asset('js/back_end/detail.js')}}"></script>
<!-- ======================================================================= -->
