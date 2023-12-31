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

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


  <style>

    body{
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
  </style>

<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky mt-5">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>Forms</span>
                </a>
                <a href="users" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-users fa-fw me-3"></i><span>Customer</span>
                </a>


                <a href="sector" class="list-group-item list-group-item-action py-2  ripple">
                    <i style="padding-right: 12px;" class="fa-solid fa-bezier-curve "></i><span>Sector</span>
                </a>

                <a href="job" class="list-group-item list-group-item-action py-2  ripple"><i
                        style="padding-right: 12px;" class="fa-solid fa-user-doctor"></i>
                    <span>job</span>
                </a>

                <a href="training" class="list-group-item list-group-item-action py-2  ripple"><i
                        style="padding-right: 12px;" class="fa-brands fa-stack-overflow"></i>
                    <span>Training</span>
                </a>
                <a href="energy" class="list-group-item list-group-item-action py-2  ripple"><i
                    style="padding-right: 12px;" class="fa-brands fa-stack-overflow"></i>
                <span>Energy</span>
            </a>

            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class=" fas fa-bars"></i>
            </button>
            <div class="container-fluid mx-auto">
                <ul class="navbar-nav">
                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                                class="rounded-circle" height="50" alt="Portrait of a Woman" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

  <!--Main layout-->
  <main style="margin-top: 50px;">

    <div class="container-fluid">
      <h1>Traning</h1>


      <table class="table table-striped table-hover">
        <div style="margin-bottom: 10px;" class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-primary me-md-2" href="./traning_create.html">Create</a>
          <button class="btn btn-success" type="button">Update</button>
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
          <td>job1</td>

          <td>
            <div class="btn-group " role="group" aria-label="Basic mixed styles example">
              <a class="btn btn-warning mx-1 " href="./traning_edit.html">Edit</a>
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
          <td>job2</td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a class="btn btn-warning mx-1 " href="./traning_edit.html">Edit</a>
              <button type="button" class="btn btn-danger">Delete</button>
          </td>
    </div>
    </tr>
    <!-- 3 coloum -->
    <tr>
      <td>
        <div>
          <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
        </div>
      </td>
      <td>523</td>
      <td>job3</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <a class="btn btn-warning mx-1 " href="./traning_edit.html">Edit</a>
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
      <td>523</td>
      <td>job4</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <a class="btn btn-warning mx-1 " href="./traning_edit.html">Edit</a>
          <button type="button" class="btn btn-danger">Delete</button>
      </td>

    </tr>
    </div>

    </table>

    </div>
  </main>
  <!--Main layout-->


  <script>
    document.addEventListener("click", function (event) {
      const dropdowns = document.getElementsByClassName("dropdown-content");
      for (const dropdown of dropdowns) {
        if (!dropdown.contains(event.target)) {
          dropdown.style.display = "none";
        }
      }
    });

  </script>



  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
