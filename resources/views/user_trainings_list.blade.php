<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
</head>

<body>

  <style>
    .star {
      color: red;
    }

    .register {
      background-color: rgb(240, 244, 223);
    }

    .register:hover {
      background-color: white;
    }

    body {
      overflow-x: hidden;
    }

    body {
      background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
      main {
        padding-left: 240px;
      }
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding: 58px 0 0;
      /* Height of navbar */
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
      width: 240px;
      z-index: 600;
    }

    @media (max-width: 991.98px) {
      .sidebar {
        width: 100%;
      }
    }

    .sidebar .active {
      border-radius: 5px;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: 0.5rem;
      overflow-x: hidden;
      overflow-y: auto;
      /* Scrollable contents if viewport is shorter than content. */
    }

    /* top-nav */
    .btn-nav {
      background-color: #1e3060;
      color: white;
      border: none;
    }

    .btn-nav:hover {
      background-color: white;
      color: black;
    }

    .nav-bg {
      background-color: #bf9855;
      color: black;
    }

    body {
      background-color: white;
    }
  </style>
  <!-- top-nav -->
  <div class="container-fluid mt-4 ">
    <div class="row nav-top ">
      <div class=" container col-lg-2 text-center navtop" style="background-color: white;">
        <img class="" style="width: 180px;height: 140px;" src="./img/NEW-LOGO-FINAL-1.png" alt="">
      </div>
      <div class=" container-fluid  col-lg-10 text-white  navtop">
        <section style="background-color: #111c3a; "
          class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
          <!-- Left -->
          <div class=" d-none d-lg-block ">
            <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                class="fa-regular fa-address-book"></i> No. 5/333A, OMR Road, Thuraipakkam, Chennai,
              Tamil Nadu, India-600097 </span>
            <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                class="fa-solid fa-phone-volume"></i> +91 89009 10738</span>
            <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                class="fa-regular fa-envelope"></i> info@tisecon.com</span>
          </div>
          <!-- Right -->
          <div>
            <a style="text-decoration: none;" href="" class=" mx-2   text-reset">
              <i class="icons-1  fab fa-facebook-f "></i>
            </a>
            <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a style="text-decoration: none;" href="" class="  mx-2 text-reset">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
              <i class="fa-brands fa-youtube"></i>
            </a>
            <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
          </div>
        </section>
        <nav class="navbar navbar-expand-lg  nav-bg">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
              data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">

              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                <li class="nav-item">
                  <a class="nav-link  mx-2 " href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  mx-2 " href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link   mx-1" href="#">Sectors</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    Services
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#">Action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link  mx-2 " href="#">Expertise</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link   mx-2" href="#">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link   mx-2" href="#">Careers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link   mx-1" href="#">Contact Us</a>
                </li>
              </ul>
              <div class="d-flex align-items-end btn-nav">
                <button type="button" class="btn btn-primary btn-nav ">
                  Feedback
                </button>
              </div>
            </div>
        </nav>
      </div>

    </div>
  </div>

  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <main style="">
      <div class="container pt-4">

        <div class="row ">
            <div class="col-lg-4">
                @include('layouts.front.user_sidebar')
            </div>
          <!-- main -->
          <div class="col-lg-8 pt-4">
            <!-- <div class="container  col-lg-6 pt-4"> -->


            <div class="container">

              <h1 class="">Training List</h1>


              <table class="table table-striped table-hover">
                <div style="margin-bottom: 10px;" class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <!-- <a class="btn btn-primary me-md-2" href="./customer_create.html">Create</a> -->
                  <button class="btn btn-success" type="button">Refresh</button>
                </div>
                <!-- head line -->
                <tr>
                  <th>
                    <div>
                      <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                  </th>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>Email</th>
                  <th>SECTOR</th>
                  <th>Course Level</th>
                  <th>Course Title</th>
                  <th>OPERATIONS</th>
                </tr>
                <!-- 1 coloum -->
                <tr>
                  <td>
                    <div>
                      <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                  </td>

                  <td>520</td>
                  <td>1</td>
                  <td>s@gmail.com</td>
                  <td>s1</td>
                  <td>j1</td>
                  <td>s1</td>



                  <td>
                    <div class="btn-group " role="group" aria-label="Basic mixed styles example">
                      <!-- <button type="button" class="btn btn-primary ">View</button> -->
                      <a class="btn btn-primary " href="/./live forms - Copy/form1.html">View</a>
                      <a class="btn btn-warning mx-1 " href="">Edit</a>
                      <a class="btn btn-danger " href="">Delete</a>
                    </div>
                  </td>
                </tr>
                <!-- 2 coloum -->
                <tr>
                  <td>
                    <div>
                      <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                  </td>
                  <td>521</td>
                  <td>2</td>
                  <td>sd@gmail.com</td>
                  <td>s1</td>
                  <td>j1</td>
                  <td>s1</td>

                  <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                      <button type="button" class="btn btn-primary ">View</button>
                      <a class="btn btn-warning mx-1 " href="">Edit</a>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <!-- 3 coloum -->
                <tr>
                  <td>
                    <div>
                      <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                  </td>
                  <td>523</td>
                  <td>3</td>
                  <td>su@gmail.com</td>
                  <td>s1</td>
                  <td>j1</td>
                  <td>s1</td>

                  <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                      <button type="button" class="btn btn-primary ">View</button>
                      <a class="btn btn-warning mx-1 " href="">Edit</a>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
            </div>

            </tr>
            <tr>
              <td>
                <div>
                  <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                </div>
              </td>
              <!-- 4 coloum -->

              <td>523</td>
              <td>4</td>
              <td>s@gmail.com</td>
              <td>s1</td>
              <td>j1</td>
              <td>s1</td>

              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a class="btn btn-primary " href="">View</a>
                  <a class="btn btn-warning mx-1 " href="">Edit</a>
                  <button type="button" class="btn btn-danger">Delete</button>
              </td>
          </div>
          </tr>
          </table>

        </div>
      </div>

    </main>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid ">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

    </nav>
    <!-- Navbar -->
  </header>

  <!-- footer -->
  <footer class="bg-dark  text-white mt-4">
    <div class="container-fluid  p-4">
      <!-- link -->
      <section class="container">
        <div class="row border-bottom ">
          <div class="col-lg-4 col-md-6 mt-5  ">
            <h1 class="">About TISE</h1>
            <p>With over 8 years of experience in the industry, <br> we provide top-notch expertise and
              innovative <br> solutions for your engineering needs</p>
            <!-- icons -->
            <div class="">
              <a style="text-decoration: none; padding-right: 10px;" href="" class="   text-reset">
                <i class="icons-1  fab fa-facebook-f g-5 "></i>
              </a>
              <a style="text-decoration: none; padding-right: 10px;" href="" class=" text-reset ">
                <i class="fa-brands fa-instagram  "></i>
              </a>
              <a style="text-decoration: none;padding-right: 10px;" href="" class=" text-reset">
                <i class="fa-brands fa-twitter"></i>
              </a>
              <a style="text-decoration: none;padding-right: 10px;" href="" class=" text-reset">
                <i class="fa-brands fa-youtube"></i>
              </a>
            </div>
          </div>
          <!-- Quick Links  -->
          <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <h4 class=""> Quick Links </h4>
            <ul class="list-unstyled mb-4 ">
              <li class="pb-1">
                <a href="#!" class="text-white">Terms and Conditions</a>
              </li>
              <li class="pb-1">
                <a href="#!" class="text-white">Privacy Policy</a>
              </li>
              <li class="pb-1">
                <a href="#!" class="text-white">Cancellation & Refund Policy – Training</a>
              </li>
              <li class="pb-1">
                <a href="#!" class="text-white">Cancellation & Refund Policy – Job</a>
              </li>
            </ul>
          </div>
          <!-- Useful Links -->
          <div class="col-lg-2 col-md-6 mt-5 mb-5">
            <h4 class=""> Useful Links </h4>
            <ul class="list-unstyled mb-0">
              <li class="pb-1">
                <a href="#!" class="text-white">Apply for Job</a>
              </li>
              <li class="pb-1">
                <a href="#!" class="text-white">Training Sessions</a>
              </li>
              <li class="pb-1">
                <a href="#!" class="text-white">Projects</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 mt-5 mb-5">
            <img class="pb-4 img-fluid" src="./img/TISE-Footer-Logo.png" alt="">
          </div>
        </div>
      </section>
    </div>
    <!-- copy -->
    <div class="row  text-center">
      <div class="col-lg-4 mt-2 mb-2">
        <p style="font-weight: bold;">Copyright © 2023 TISE, All rights reserved.</p>
      </div>
      <div class="col-lg-4  d-flex mt-2 ">
        <p class="m-2">Razorpay Quick Links:</p>
        <a class="m-2" style="color: white; " href=""> Privacy Policy </a>
        <a class="m-2" style="color: white;" href=""> T&C </a>
        <a class="m-2" style="color: white;" href=""> Shipping </a>
        <a class=" m-2" style="color: white;" href=""> Refund </a>
      </div>
      <div class="col-lg-4 mt-2 mb-2">
        <p style="font-weight: bold;">Powered by TISE</p>

      </div>
    </div>
  </footer>






  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>
