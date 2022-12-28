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
        <th>Number</th>
        <th>Route</th>
        <th>Time</th>
        <th>Action</th>

    </tr>

    @foreach ($trains ?? '' as $train)
            <tr>
                <td>{{$train->id}}</td>
                <td>{{$train->name}}</td>
                <td>{{$train->number}}</td>
                <td>{{$train->route}}</td>
                <td>{{$train->time}}</td>
                <td>
                    <a class="btn" style="border: 1px solid;" href="{{URL::to('train/edit', $train->id)}}" title="Edit -> {{$train->id}}"> Edit</i></a>

                    <!-Below we added onclick="return confirm ('Are you sure to delete the train {{$train->name}} having id {{$train->id}}?')" -->
                        <!-- If user presses OK on the confirmation dialogue, the route mentioned in href -->
                        <!- will be executed. In case of pressing the Cancle button, nothing happens. -->
                            <a class="btn" style="border: 1px solid;" href="{{URL::to('train/delete', $train->id)}}" onclick="return confirm ('Are you sure to delete the train {{$train->name}} having id {{$train->id}}?')" title="Delete -> {{$train->id}}"> Delete</i></a>
                </td>
            </tr>
            @endforeach





</table>

</body>
</html>


