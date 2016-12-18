<div class="admin-content">
    <div class="main">
    @if(isset($reservation))
        <h3> Reservation Page </h3>
        <table>
            <tr>
                <label> FEATURE: </label>
            </tr>
            <tr>
                <a href="{{ URL::route('exportReservation') }}" 
                    class="btn btn-info pull left" style="margin-right:3px;">Export to Excel</a>
            </tr>
            <tr>
                <form method="GET" action="{{ URL::route('adminCategory') }}">
                    <span>SORT: </span>
                    <select name="sort">
                        <option value="id">ID</option>
                        <option value="title">Title</option>
                        <option value="type">Type</option>
                    </select>
                    <input type="submit" value="Change">
                </form>
            </tr>
        </table>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Arrival Date</th>
                <th>Departure Date'</th>
                <th>Type</th>
                <th>Number</th>
                <th>Operations</th>
            </tr>
            @foreach($reservation as $value)
                <tr>
                    <td>{{ $value['reservation_id'] }}</td>
                    <td>{{ $value['reservation_name'] }}</td>
                    <td>{{ $value['reservation_email'] }}</td>
                    <td>{{ $value['reservation_arrival_date'] }}</td>
                    <td>{{ $value['reservation_departure_date'] }}</td>
                    <td>{{ $value['reservation_type'] }}</td>
                    <td>{{ $value['reservation_number_people'] }}</td>
                    <td>
                        <a href="{{ route('editCategoryView') }}?id={{ $value['category_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                        <button class="btn btn-danger pull left submitDelete" source="{{ route('deleteCategory') }}?id={{ $value['category_id'] }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
    </div>
</div>