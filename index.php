<html>
    <head>
        <title>UniFind: Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
          .card:hover{
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

      <!-- sponsored-content -->
      <div class="pt-3 pb-3">
        <img src="assets/images/kuliah-bsi.jpg" alt="sponsored-content" style="width: 100%; height: 400px;">
      </div>

      <!-- Menu Cards -->
      <div class="row p-3">
        <div class="col-sm-2" style="width: 25%">
          <div class="card">
            <img src="assets/images/illustration.jpg" class="card-img-top" alt="Ilustrasi Universitas">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold p-1">UNIVERSITAS</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ligula purus, bibendum in congue non, aliquet nec lacus. Cras at sodales mauris.</p>
              <a href="universitas/universitas.php" class="btn btn-primary" style="margin-left: 55%">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-sm-2" style="width: 25%">
          <div class="card">
            <img src="assets/images/illustration.jpg" class="card-img-top" alt="Ilustrasi Unitry">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold p-1">UNITRY</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ligula purus, bibendum in congue non, aliquet nec lacus. Cras at sodales mauris.</p>
              <a href="unitry/unitry.php" class="btn btn-primary" style="margin-left: 55%">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-sm-2" style="width: 25%">
          <div class="card">
            <img src="assets/images/illustration.jpg" class="card-img-top" alt="Ilustrasi Beasiswa">
            <div class="card-body">
              <h5 class="card-title text-center p-1 fw-bold">BEASISWA</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ligula purus, bibendum in congue non, aliquet nec lacus. Cras at sodales mauris.</p>
              <a href="beasiswa/beasiswa.php" class="btn btn-primary" style="margin-left: 55%">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-sm-2" style="width: 25%">
          <div class="card">
            <img src="assets/images/illustration.jpg" class="card-img-top" alt="Ilustrasi Donasi">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold p-1">DONASI</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ligula purus, bibendum in congue non, aliquet nec lacus. Cras at sodales mauris.</p>
              <a href="donasi/donasi.php" class="btn btn-primary" style="margin-left: 55%">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>

