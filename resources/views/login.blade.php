<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,700,200') }}" rel="stylesheet">
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('css/aos.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css?ver=1.1.0') }}" rel="stylesheet">
    <title>Login Form</title>
</head>

<body>
    <section class="vh-100" style="background-color: rgb(255, 255, 255);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Sign in</h3>
                            <form action="{{ url('auth') }}" method="post">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input name='username' class="form-control form-control-lg"
                                        placeholder="Username" />
                                </div>
                                <div class="form-outline mb-4">
                                    <input name='password' class="form-control form-control-lg"
                                        placeholder="password" />
                                </div>
                                <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: green;"
                                    type="submit"></i>Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
