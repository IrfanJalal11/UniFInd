<html>
    <head>
        <title>UniTry: Minat Bakat</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
          .col-sm-2:hover{
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
            cursor: pointer;
          }
          @media all {
            .navbar .nav-item .dropdown-menu{display: none; border-color:transparent; border-top-left-radius: 0%; border-top-right-radius: 0%;}
            .navbar .nav-item:hover .dropdown-menu{display: block;}
            .navbar .nav-item .dropdown-menu{margin-top: -0.68em; margin-left: -2em;}
          }
        </style>
    </head>

    <body style="background-color: #e7f0ff;">
      <!-- Navbar Head -->
      <nav class="navbar" style="background-color: #4392f1;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/unifind/index.php">
            <h3 class="fw-bolder" style="color: red;">Uni<span class="fw-bold" style="color: white;">Find</span></h3>
          </a>
          <a class="align-right navbar-brand text-white" href="/unifind/user/profile.html"><img src="/unifind/assets/images/account.png" alt="profile picture" style="width: 30px;"> Marwoto</a>
        </div>
      </nav>

      <!-- Navbar dropdown -->
      <nav class="navbar navbar-expand-lg bg-white shadow-sm p-3 mb-5 bg-body" style="height: 35px;">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="margin-left: 1000px;">
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle fw-bold" href="/unifind/universitas/universitas.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #4392f1;">
                  Universitas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item fw-bold" href="/unifind/universitas/dataAlumni.php">Data Alumni</a></li>
                  <li><a class="dropdown-item fw-bold" href="/unifind/universitas/kerjaSama.php">Kerja Sama</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle fw-bold" href="/unifind/unitry/unitry.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #4392f1;">
                  UniTry
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item fw-bold" href="/unifind/unitry/minatBakat.php">Tes Minat Bakat</a></li>
                  <li><a class="dropdown-item fw-bold" href="/unifind/unitry/tryout.php">TryOut</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active fw-bold" aria-current="page" href="/unifind/beasiswa/beasiswa.php" style="color: #4392f1;">Beasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fw-bold" aria-current="page" href="/unifind/donasi/donasi.php" style="color: #4392f1;">Donasi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
      <div class="card mt-5 shadow-sm p-3 mb-5 bg-body rounded">
      <div class="card-body p-4">

      <!-- Soal -->
          <p style="font-weight:bold">1. Kucing kucing apa yang?</p>
      <div class="row p-3">
        <div class="col-sm-2 m-1 card" style="width: 24%">
          
            <div class="card-body">
              <h5 class="card-title text-center fw-bold p-1">A</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ligula purus, bibendum in congue non, aliquet nec lacus. Cras at sodales mauris.</p>
            
          </div>
        </div>
        <div class="col-sm-2 m-1 card" style="width: 24%">
          
            <div class="card-body">
              <h5 class="card-title text-center fw-bold p-1">B</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ligula purus, bibendum in congue non, aliquet nec lacus. Cras at sodales mauris.</p>
            </div>
          
        </div>
        <div class="col-sm-2 m-1 card" style="width: 24%">
          
            <div class="card-body">
              <h5 class="card-title text-center p-1 fw-bold">C</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ligula purus, bibendum in congue non, aliquet nec lacus. Cras at sodales mauris.</p>
            </div>
          
        </div>
        <div class="col-sm-2 m-1 card" style="width: 24%">
          
            <div class="card-body">
              <h5 class="card-title text-center fw-bold p-1">D</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ligula purus, bibendum in congue non, aliquet nec lacus. Cras at sodales mauris.</p>
            </div>
          
        </div>
      </div>
      </div>
      </div>
        </div>
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>  