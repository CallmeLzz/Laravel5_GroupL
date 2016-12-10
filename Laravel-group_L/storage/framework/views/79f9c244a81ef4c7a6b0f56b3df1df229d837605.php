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
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/admin/admin.css">
<style>
	dialog {  
	    width: 500px;  
	    background:#e8e8e8;
	    border: 1px solid #dadada;
	    font-family:sans-serif;
	    padding: 5px 10px 20px 20px;
	}  
</style>
                                <!--JavaScripts-->
<script src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/dialog.js"></script>
<!-- ======================================================================= -->
