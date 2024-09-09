<!doctype html>
<html lang="en">

<head>
    <title> Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('adminlogin/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('adminlogin/css/style.css') }}">

</head>

<body>
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="wrap d-md-flex">
                        <div class="login-wrap p-4 p-md-5" style="width: 100%">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Login In</h3>
                                </div>

                            </div>
                            @if (Session::has('message'))
                                <div class="alert alert-danger">
                                    <strong>Opps!</strong> {{ Session::get('message') }}
                                </div>
                             @endif
                            <form method="post" action="{{ route('admin_login_post') }}">

                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email"
                                        id="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
