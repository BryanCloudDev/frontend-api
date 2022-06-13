<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <h2 class="fw-bold mb-2 text-uppercase">Sign up</h2>
                                <form action="http://127.0.0.1:8001/register" method="post">
                                    @csrf
                                    <div class="label form-outline form-white mb-4">
                                        <label class="form-label text-start">Name</label>
                                        <input type="text" name="name" class="form-control form-control">    
                                    </div>
                                    <div class="label form-outline form-white mb-4">
                                        <label class="form-label text-start">Username</label>
                                        <input type="email" name="email" class="form-control form-control">    
                                    </div>
                                    <div class="label form-outline form-white mb-4">
                                        <label class="form-label text-start">Password</label>
                                        <input type="password" name="password" class="form-control form-control">    
                                    </div>
                                    @if ($errors->any() || isset($emailError))
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <strong>Check the data entered</strong>
                                        @if($errors->any())
                                            @foreach ($errors->all() as $error)
                                            <p class="myError">- {{$error}}</p>
                                            @endforeach
                                        @endif
                                        @if(isset($emailError))
                                            <p class="myError">- {{$emailError}}</p>
                                        @endif
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                            </ul>
                                        </div>
                                    @endif
                                    <p class="small mb-5 pb-lg-2"><a class="text-dark" href="#!">Forgot password?</a></p>
                                    <button class="name-button bg-dark btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
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