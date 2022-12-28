<!DOCTYPE html>
<html>
<head>
<style>
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
  color: white;
}
</style>
</head>
<body>
<label class="">Logged in as:{{ $LoggedUserInfo['name'] }}</label>


        <div class="d-grid gap-2">
          <h2 class="h2" style="text-align: center;">Book</h2>
          <a class="btn btn-dark btn-lg" role="button" aria-disabled="true" href="http://127.0.0.1:8000/reservation/create">Book Bus</a>
        </div>
        <a class="btn btn-secondary" href="{{ route('user.logout') }}">Logout</a>



</body>
</html>


