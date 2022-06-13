<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
</head>
<body>
    <section class="min-vh-100 gradient-custom d-flex align-items-center">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="form-box card text-dark">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h1>Update Vaccine {{$vaccine->vaccine_name}}</h1>
                                <form action="/vaccine/{{$vaccine->id}}" method="post">
                                @csrf
                                @method('put')
                                    <div class="label form-outline form-white mb-4">
                                        <label class="form-label text-start">Vaccine Name</label>
                                        <input type="text" name="vaccine_name" class="form-control form-control" value="{{$vaccine->vaccine_name}}">
                                        @error('vaccine_name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="label form-outline form-white mb-4">
                                        <label class="form-label text-start">Available Quantity</label>
                                        <input type="text" name="available_quantity" class="form-control form-control" value="{{$vaccine->available_quantity}}">
                                        @error('available_quantity')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="label form-outline form-white mb-4">
                                        <label class="form-label text-start">Vaccine Type</label>
                                        <input type="text" name="vaccine_type" class="form-control form-control" value="{{$vaccine->vaccine_type}}">
                                        @error('vaccine_type')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="label form-outline form-white mb-4">
                                        <label class="form-label text-start">Vaccine Creator</label>
                                        <input type="text" name="vaccine_creator" class="form-control form-control" value="{{$vaccine->vaccine_creator}}">
                                        @error('vaccine_creator')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <button class="name-button bg-dark btn btn-outline-light btn-lg px-5" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
