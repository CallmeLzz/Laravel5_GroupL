<div class="left-menu">
    <ul>
        <li>
            Menu
        </li>
        <li class="divider"></li>
        <li>
            <a href="{{ route('admin') }}"> Admin Page </a>
            <ul>
                <li>
                    Home
                    <ul>
                        <li><a href="{{ URL::route('adminMenu') }}"> Menu </a></li>
                        <li><a href="{{ URL::route('adminBanner') }}"> Banner </a></li>
                    </ul>
                </li>
                <li>
                    Category
                    <ul>
                        <li><a href="{{ URL::route('adminCategory') }}"> Category </a></li>
                        <li><a href="{{ URL::route('adminDetailPrice') }}"> Price </a></li>
                        <li><a href="{{ URL::route('adminReservation') }}"> Reservation </a></li>
                    </ul>
                </li>
                <li>
                    Detail
                    <ul>
                        <li><a href="{{ URL::route('adminDetail') }}"> Detail </a></li>
                        <li><a href="{{ URL::route('adminDetailFeature') }}"> Features </a></li>
                        <li><a href="#"> Amenities </a></li>
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