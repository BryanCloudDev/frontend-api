<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>States</title>
    @include('modules.head')
</head>
<style>
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #000000;
}
h2 {
  color: white;
}
.card-header {
  color: #D11212;
  font-weight:bold;
  text-align: center;
}

.card-body {
    background-color: #C6CCE0;
}
</style>
<body>
    @include('modules.navbar')
    @php
    if(session()->has("populations")){
    $populations = session()->get("populations");
    }
    @endphp
    <section class="gradient-custom d-flex align-items-center mt-5">
        <div class="container py-5 h-100">
            <div class="row">
                @if(count($populations) == 0)
                <p class="text-bg-danger p-3 container fs-5 fw-semibold text-light rounded text-center">There are not states found, consult your state again</p>
                @else
                <h2>States</h2>
                @foreach($populations as $population)
                <div class="col-sm-3 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header text-danger">{{$population->states}}</h5>
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
                @endif
            </div>
        </div>
    </section>
<<<<<<< HEAD
    @include('modules.footer')
=======
    <div class="footer">
  <h2>Proyecto final</h2>
  <p style="color:white">© Copyright 2022 Team #3 KODIGO</p>
</div>
>>>>>>> 2755d5e68f97769251d6440221638a68168586c7
</body>
</html>
