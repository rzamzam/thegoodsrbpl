<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <title>THEGOODS - Login</title>
</head>

<body>
    <div class="text-center mt-5">
        <img src="../assets/img/apple-touch-icon.png" alt="" style="width:30vh">
    </div>
    <form action="/login" method="POST">
      @csrf
        <div class="row mt-2">
            <div class="col-4"></div>
            <div class="col-4">
                <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input name="email" type="email" id="form2Example1" class="form-control" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input name="password" type="password" id="form2Example2" class="form-control" />
          </div>

          <!-- Submit button -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block mb-4 w-50">Sign in</button>
          </div>
        </form>

          <!-- Register buttons -->
          <div class="text-center">
            <p>Not a member? <a href="/register">Register</a></p>

          </div>
            </div>
            <div class="col-4"></div>
        </div>

     
</body>

</html>


