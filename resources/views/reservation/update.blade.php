<!DOCTYPE html>
<html>

<head>
    <title>Update Reservation</title>
    <!-- For Success alert that appears after deletion -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="container-fluid" style="background-color: burlywood;">
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://127.0.0.1:8000/">Train Reservation</a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-secondary" role="button" aria-disabled="true" href="http://127.0.0.1:8000/email">Support</a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="{{ route ('reservation.update', $reservations->id) }}" method="post" class="vh-100">
        @csrf

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 ">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase text-center">Update Reservation</h2>
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" name="name" placeholder="Enter your Name" value="{{$reservations->name}}" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label">Email</label>
                                    <input type="text" id="email" name="email" placeholder="Enter your Email" value="{{$reservations->email}}" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" placeholder="Enter your Phone" value="{{$reservations->phone}}" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="total_seats">Total Seats</label>
                                    <input type="text" id="total_seats" name="total_seats" placeholder="Enter Number Seats" value="{{$reservations->total_seats}}" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label for="train">Train:</label>
                                    <select id="dropdown" name="train" class="form-select">
                                        @foreach($trains as $train)
                                        <option value="{{$train->id}}">
                                            {{$train->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>