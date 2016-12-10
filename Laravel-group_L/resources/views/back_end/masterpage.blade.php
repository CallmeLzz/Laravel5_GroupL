<!DOCTYPE html>
<html>
<head>
    @include('back_end.layout.head')
    <title> @yield('title') </title>

</head>

<body>

    @include('back_end.layout.menu')

    <div class="col-md-3 block-left">
        @include('back_end.layout.left_menu')
    </div>

    <div class="col-md-6">
        @yield('main-content')
    </div>

    <div class="col-md-3 block-right">
        @yield('right-menu')
        <!-- @include('back_end.layout.right_menu') -->
    </div>

</body>
</html>