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
  </style>

  <!--Main Navigation-->
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

  <main style="margin-top: 100px;">

    <div class="container-fluid">
      <h1>Job List</h1>
      @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

      <table class="table table-striped table-hover">

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary me-md-2" href="{{ route('job.create') }}">Create</a>
        <button class="btn btn-success" type="button" onclick="window.location.reload();">Refresh</button>
      </div>
      <thead>
        <tr>
          <th>S.NO</th>
          <th>ID</th>
          <th>JOB</th>
          <th>OPERATIONS</th>
        </tr>
      </thead>
      <tbody>
        @php
        $counter = 1;
        @endphp
        @foreach($jobs as $job)
        <tr>
          <td>{{ $counter++ }}</td>
          <td>{{ $job->id }}</td>
          <td>{{ $job->job }}</td>
          <td>
            <!-- Edit Button -->
            <a href="{{ route('job.edit', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <!-- Delete Button -->
            <form action="{{ route('job.destroy', $job->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm"
                onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
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
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>
