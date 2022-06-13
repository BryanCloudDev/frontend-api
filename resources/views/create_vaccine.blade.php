<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new vaccine</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="min-vh-100 gradient-custom d-flex align-items-center">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="form-box card text-dark">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <Title message="Create new vaccine"/>
                                <form action="">
                                    <Input :name="vaccineName" value="Vaccine name" />
                                    <Input :name="availableQuantity" value="Available Quantity" />
                                    <Input :name="vaccineType" value="Vaccine type" />
                                    <Input :name="vaccineCreator" value="Vaccine Creator" />
                                    <button class="name-button bg-dark btn btn-outline-light btn-lg px-5" type="submit">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div id="create_vaccine"></div>
    <script src="{{ asset('/js/main.js') }}"></script> -->
    <!-- <script type="text/javascript"> window.csrf_token = "{{ csrf_token() }}"</script> -->
</body>
</html>