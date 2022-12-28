<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>


<table id="customers">

     <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Todal Seats</th>
        <th>Train Name</th>
        <th>Action</th>

    </tr>

            @foreach ($reservations ?? '' as $reservation)
            <tr>
                <td>{{$reservation->id}}</td>
                <td>{{$reservation->name}}</td>
                <td>{{$reservation->email}}</td>
                <td>{{$reservation->phone}}</td>
                <td>{{$reservation->total_seats}}</td>
                <td>{{$reservation->train->name}}</td>

                <td>
                    <a class="btn" style="border: 1px solid;" href="{{URL::to('reservation/edit', $reservation->id)}}" title="Edit -> {{$reservation->id}}"> Edit</i></a>

                        <a class="btn" style="border: 1px solid;" href="{{URL::to('reservation/delete', $reservation->id)}}" onclick="return confirm ('Are you sure to delete the reservation {{$reservation->name}} having id {{$reservation->id}}?')" title="Delete -> {{$reservation->id}}"> Delete</i></a>
                </td>
            </tr>
            @endforeach
</table>

</body>
</html>


