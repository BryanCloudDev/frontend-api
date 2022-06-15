<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    @include('modules.head')
</head>
<body>
    @include('modules.navbar')
    <div class="mapMaxSize container animate__animated animate__fadeInDown" id="app"></div>
    <section>
    <h2>States</h2>
    <div class="col-sm-3 mt-4">
    <div class="card">
                        <div class="card-body card-body-color">
                            <h5 class="card-header-color text-danger">States</h5>
                            <dl>
                                <dt>Modificar1</dt>
                                <dd>Modificar2</dd>
                            </dl>
        </div>
    </div>

    <h2>Vaccines</h2>
    <div class="card">
                        <div class="card-body card-body-color">
                            <h5 class="card-header-color text-danger">Vaccines</h5>
                            <dl>
                                <dt>Modificar1</dt>
                                <dd>Modificar2</dd>
                            </dl>
        </div>
    </div>
</section>
    <section>
        @include('modules.footer')
</section>
</body>
<script src="{{asset('../js/main.js')}}" defer></script>
</html>
