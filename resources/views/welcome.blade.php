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


<a class="btn btn-secondary" role="button" aria-disabled="true" href="http://127.0.0.1:8000/email">Email</a>


        <div class="d-grid gap-2">
          <h2 class="h2" style="text-align: center;">ADMIN</h2>
          <a class="btn btn-dark btn-lg" role="button" aria-disabled="true" href="{{ route('admin.login') }}">Log in</a>
          <a class="btn btn-dark btn-lg" role="button" aria-disabled="true" href="{{ route('admin.register') }}">Register</a>
        </div>
        <div class="d-grid gap-2">
          <h2 class="h2" style="text-align: center;">USER</h2>
          <a class="btn btn-dark btn-lg" role="button" aria-disabled="true" href="{{ route('user.login') }}">Log in</a>
          <a class="btn btn-dark btn-lg" role="button" aria-disabled="true" href="{{ route('user.register') }}">Register</a>
        </div>



</body>
</html>


