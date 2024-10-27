<!doctype html>
<html lang="en">
<head>
    <title>Archer's Tours and Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Add elevation styles */
        .input-elevation {
            border: 1px solid #ccc; /* Optional: Change border color */
            border-radius: 4px; /* Optional: Add rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Change these values for more/less shadow */
            transition: box-shadow 0.3s ease; /* Smooth transition on focus */
        }

        .input-elevation:focus {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Deeper shadow on focus */
            outline: none; /* Remove default outline */
        }

        /* Loader styles */
        .loader {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top: 4px solid white;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
            display: none; /* Hidden by default */
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="img js-fullheight" style="background-image: url(images/zebra-wild.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="logo">
                    <a href="/">
                        <img src="/images/logo_medium_3-removebg-preview.png" alt="Logo" style="height:50px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center"></h3>
                        <br>

                        @if (session('status'))
                            <div class="form-group mb-4">
                                <p style="color: green;">{{ session('status') }}</p>
                            </div>
                        @endif

                        <form class="signin-form" method="POST" action="{{ route('login') }}" onsubmit="showLoader()">
                            @csrf
                            <div class="form-group">
                                <input class="form-control input-elevation" placeholder="Email" required id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <p style="color: red;">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control input-elevation" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <p style="color: red;">{{ $errors->first('password') }}</p>
                                @endif
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" id="togglePassword" style="cursor: pointer;"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn-primary submit rounded" style="background-color:orange;text-transform:capitalize;border-radius:0px">
                                    Sign In
                                    <div class="loader" id="loader"></div> <!-- Loader -->
                                </button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="forgot-password" href="{{ route('password.request') }}">Forgot your password?</a>
                                @endif
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded" style="background-color: #DB4437; color: white;">
                                <span class="fa fa-google mr-2"></span> Google
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        // Function to show the loader
        function showLoader() {
            const loader = document.getElementById('loader');
            loader.style.display = 'inline-block'; // Show the loader
        }


    </script>
</body>
</html>
