<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccines | Population</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Name</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/signin">Sign In</a>
                <a class="nav-link " href="/signup">Sign Up</a>
                <form class="d-flex" role="search" method="post" action="/state/city">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="city">
                    <button class="btn btn-darks btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>
<body>
    @php
    if(session()->has("populations")){
    $populations = session()->get("populations");
    }
    @endphp
    <section class="min-vh-100 gradient-custom d-flex align-items-center mt-5">
        <div class="container py-5 h-100">
            <div class="row">
                <h2>States</h2>
                @foreach($populations as $population)
                <div class="col-sm-3 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-danger">{{$population->states}}</h5>
                            <dl>
                                <dt>Total Population</dt>
                                <dd>{{$population->total_population}}</dd>
                                <dt>Vaccinated Population</dt>
                                <dd>{{$population->vaccinated_population}}</dd>
                                <dt>Unvaccinated Population</dt>
                                <dd>{{$population->unvaccinated_population}}</dd>
                            </dl>
                            <a href="/state/{{$population->id}}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <h2>Vaccines</h2>
                @foreach($vaccines as $vaccine)
                <div class="col-sm-3 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-danger">{{$vaccine->vaccine_name}}</h5>
                            <dl>
                                <dt>Available Quantity</dt>
                                <dd>{{$vaccine->available_quantity}}</dd>
                                <dt>Vaccine Type</dt>
                                <dd>{{$vaccine->vaccine_type}}</dd>
                                <dt>Vaccine Creator</dt>
                                <dd>{{$vaccine->vaccine_creator}}</dd>
                            </dl>
                            <a href="/vaccine/{{$vaccine->id}}" class="btn btn-primary">Edit</a>
                            <form action="/vaccine/{{$vaccine->id}}" style="display:inline;" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>
