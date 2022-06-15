<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>States</title>
    @include('modules.head')
</head>
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
        </div>
    </section>
    @include('modules.footer')
</body>
</html>