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


<div>
<form action="{{ route ('train.store') }}" method="post" class="vh-100">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Bus name">
    <label for="number">Bus number</label>
    <input type="text" id="number" name="number" placeholder="Bus number">
    <label for="route">route</label>
    <input type="text" id="route" name="route" placeholder="Bus route">
    <label for="time">time</label>
    <input type="text" id="time" name="time" placeholder="Bus time">



    
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>


