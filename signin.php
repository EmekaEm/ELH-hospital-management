<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>ELH Hospital</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- Bootstrap css link for header -->
    <link href="/css/headers.css" rel="stylesheet">
     <!-- Bootstrap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


        <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <body>


    <!-- HEADER START-->
    <div class="b-example-divider"></div>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="/hbook/index.php" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="/hbook/book.php" class="nav-link px-2 link-dark">Book Appointment</a></li>
      <li><a href="/hbook/price.php" class="nav-link px-2 link-dark">Pricing</a></li>
      <li><a href="/hbook/doctor.php" class="nav-link px-2 link-dark">Our Physicians</a></li>
      <li><a href="/hbook/contact.php" class="nav-link px-2 link-dark">Contact US</a></li>
      <li><a href="/hbook/cart.php" class="nav-link px-2 link-dark">
      <img src="/hbook/images/cart.jpg" alt="Cart Icon" class="icon-img" style="width: 40px; height: 40px;">
     </a></li>
    </ul>


    <!-- SIGN IN PAGE --> 

    <div class="col-md-3 text-end">
        <a href="signin.php" class="btn btn-outline-primary me-2">Login</a>

    </div>
         </header>
    </div>
    
    <!-- Header end-->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        background-image: url('hbook/images/sign.jpg');
        background-size: cover; /* Adjust as needed */
        background-position: center; /* Adjust as needed */
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <form method="post" action = "connect.php">
      <label for="floatingInput">User</label>
      <input type="text" name ="user" class="form-control" id="floatingInput" placeholder="user">
    </div>
    <div class="form-floating">
      <input type="text" name = "password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" input type="submit" value = "submit" >Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>