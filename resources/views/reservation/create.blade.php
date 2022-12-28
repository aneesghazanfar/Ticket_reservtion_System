<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>


<form action="{{ route ('reservation.store') }}" method="post" class="vh-100">
@csrf
    <label for="fname"> Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email"> Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="phone"> phone</label>
    <input type="text" id="phone" name="phone" placeholder="Your phone..">

    <label for="total_seats"> total_seats</label>
    <input type="text" id="total_seats" name="total_seats" placeholder="Your total_seats..">

    <label for="train">Train:</label>
    <select id="dropdown" name="train" class="form-select">
         @foreach($trains as $train)
         <option value="{{$train->id}}">
             {{$train->name}}
        </option>
          @endforeach
     </select>


  

  
    <input type="submit" value="Submit">
  </form>

</body>
</html>


