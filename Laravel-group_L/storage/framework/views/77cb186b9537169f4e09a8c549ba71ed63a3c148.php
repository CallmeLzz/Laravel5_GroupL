<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type_16.less', 'css/type_16.css');
    $less->compileFile('less/styles.less', 'css/styles.css');
    $less->compileFile('less/type-34.less', 'css/type-34.css');
    $less->compileFile('less/top-nav.less', 'css/top-nav.css');
    $less->compileFile('less/banner.less', 'css/banner.css');
    $less->compileFile('less/danhsach_1.less', 'css/danhsach_1.css');
    $less->compileFile('less/danhsach_2.less', 'css/danhsach_2.css');
    $less->compileFile('less/danhsach_3.less', 'css/danhsach_3.css');
    $less->compileFile('less/detail-1.less', 'css/detail-1.css');
    $less->compileFile('less/detail-2.less', 'css/detail-2.css');
?>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/weather-icons.min.css">
<link rel="stylesheet" type="text/css" href="css/js_composer.min.css">
<!-- ======================================================================= -->
<link rel="stylesheet" type="text/css" href="css/type_16.css">
<!-- ======================================================================= -->
<link rel="stylesheet" type="text/css" href="css/danhsach_1.css">
<link rel="stylesheet" type="text/css" href="css/danhsach_2.css">
<link rel="stylesheet" type="text/css" href="css/danhsach_3.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<!-- ======================================================================= -->
<link rel="stylesheet" type="text/css" href="css/top-nav.css">
<link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/banner.css">
<link rel="stylesheet" type="text/css" href="css/type-34.css">
<link rel="stylesheet" type="text/css" href="css/detail-1.css">
<link rel="stylesheet" type="text/css" href="css/detail-2.css">

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/demo-slideshow-2.0.js"></script>
<!-- ======================================================================= -->