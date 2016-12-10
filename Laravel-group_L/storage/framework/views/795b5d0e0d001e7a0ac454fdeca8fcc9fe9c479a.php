<div class="left-menu">
    <ul>
        <li>
            Menu
        </li>
        <li class="divider"></li>
        <li>
            <a href="<?php echo e(route('admin')); ?>"> Admin Page </a>
            <ul>
                <li>
                    Home
                    <ul>
                        <li><a href="<?php echo e(URL::route('adminMenu')); ?>"> Menu </a></li>
                        <li><a href="<?php echo e(URL::route('adminBanner')); ?>"> Banner </a></li>
                    </ul>
                </li>
                <li>
                    Category
                    <ul>
                        <li><a href="<?php echo e(URL::route('adminCategory')); ?>"> Category </a></li>
                        <li><a href="#"> Price </a></li>
                    </ul>
                </li>
                <li>
                    Detail
                    <ul>
                        <li><a href="<?php echo e(URL::route('adminDetail')); ?>"> Detail </a></li>
                        <li><a href="#"> Room Features </a></li>
                        <li><a href="#"> Room Amenities </a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            Features - Add
            <ul>
                <li>
                    Home
                    <ul>
                        <li><a href="<?php echo e(URL::route('addMenu')); ?>"> Menu </a></li>
                        <li><a href="<?php echo e(URL::route('addBannerView')); ?>"> Banner </a></li>
                    </ul>
                </li>
                <li>
                    Category
                    <ul>
                        <li><a href="<?php echo e(URL::route('addCategoryView')); ?>"> Category </a></li>
                    </ul>
                </li>
                <li>
                    Detail
                    <ul>
                        <li><a href="<?php echo e(URL::route('addDetailView')); ?>"> Detail </a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="uploadFileView"> Upload file </a>
        </li>
    </ul>
</div>
</div>