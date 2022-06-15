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

.card-body-color {
    background-color: #C6CCE0;
    border-style: solid;
    border-width: 4px 4px 4px 4px;
    border-color: black;
    border-radius: 0.3rem;
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
        <div class="container py-5 h-100 animate__animated animate__fadeInDown">
            <div class="row">
                @if(count($populations) == 0)
                <p class="text-bg-danger p-3 container fs-5 fw-semibold text-light rounded text-center">There are not states found, consult your state again</p>
                @else
                <h2>States</h2>
                @if(session('response'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('response')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif
                @foreach($populations as $population)
                <div class="col-sm-3 mt-4">
                    <div class="card">
                        <div class="card-body card-body-color">
                            <h5 class="card-header-color text-danger">{{$population->states}}</h5>
                            <dl>
                                <dt>Total Population</dt>
                                <dd>{{$population->total_population}}</dd>
                                <dt>Vaccinated Population</dt>
                                <dd>{{$population->vaccinated_population}}</dd>
                                <dt>Unvaccinated Population</dt>
                                <dd>{{$population->unvaccinated_population}}</dd>
                            </dl>
                            @if(session()->has('auth'))
                            <a href="/state/{{$population->id}}" class="btn btn-primary">Edit</a>
                            <form action="/state/deleteState" style="display:inline;" method="post">
                                <input type="hidden" name="id" value="{{$population->id}}">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    @include('modules.footer')
</body>
</html>
