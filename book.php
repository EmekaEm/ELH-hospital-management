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
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Book Appointment </h2>
    </div>


      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Details</h4>
        <form method="post" action = "connect1.php" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
        

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" name = "lastName" placeholder="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
        

            <div class="col-12">
              <label for="age" class="form-label">age</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="age" name ="age" placeholder="age" required>
              <div class="invalid-feedback">
                  Your age is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="email" name ="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address 
              </div>
            </div>

            <div class="col-12">  
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name = "address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div>

            <div class="col-12">
            <label for="state" class="form-label">Physician</label>
              <select class="form-select" id="doctors" name = "doctor" required>
                <?php
            $conn = mysqli_connect("localhost", "root","","22225984");
            $sql = 'SELECT doctor_id, name FROM doctors';
            $result = $conn->query($sql);
            $doctors= $result->fetch_all(MYSQLI_ASSOC);
            foreach($doctors as $doctor){  
            ?>
                <option value="<?=$doctor['doctor_id']?>"><?=$doctor['name']?></option>
                <?php
            }
            ?>
              </select>
              <div class="invalid-feedback">
                Please choose a Valid Physician from our phycisian page.
              </div>
            
          <button class="w-100 btn btn-primary btn-lg" type="submit">Book</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 ELH Hospital</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
