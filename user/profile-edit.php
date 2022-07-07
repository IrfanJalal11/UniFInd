<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User: Edit Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
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
          <a class="align-right navbar-brand text-white" href="/unifind/user/login.html"><img src="/unifind/assets/images/account.png" alt="profile picture" style="width: 30px;"> Marwoto</a>
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

<body style="background-color: #e3ebff; font-family: 'nunito', sans-serif">
<div class="container justify-content-center">

<div class="card mt-5 shadow-sm p-3 mb-5 bg-body rounded">
<div class="card-body p-4">
 
  <!-- Pills navs -->
  
  <!-- Pills content -->
  <div class="tab-content">
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
      <form>
        <h3>Edit Profile</h3>
        <br>
        <!--Name input-->
        <div class="form-outline mb-4">
          <input type="text" id="nama" placeholder="Nama" class="form-control" />
         <!-- <label class="form-label" for="loginName">name</label> -->
        </div>
        <!-- Asal sekolah input -->
        <div class="form-outline mb-4">
          <input type="text" id="asl-sekolah" placeholder="Asal sekolah" class="form-control" />
         <!-- <label class="form-label" for="loginName">Email</label> -->
        </div>
        <!--Alamat input-->
        <div class="form-outline mb-4">
            <input type="textarea" id="alamat" placeholder="Alamat" class="form-control" />
           <!-- <label class="form-label" for="loginName">Alamaat</label> -->
          </div>
  
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="text" id="notelp" placeholder="No. telepon"class="form-control" />
          <!--<label class="form-label" for="loginPassword">Password</label> -->
        </div>        
    
        <!-- buttons -->
        <div class="row">
            <div class="col">
                <a data-toggle="modal" data-target="#confirmModal" type="submit" class="btn btn-primary btn-block" style="width: 100%">Simpan</a>
            </div>
            <div class="col">
                <a  class="btn btn-primary btn-secondary" style="width: 100%" href="/unifind/user/profile.html">Batal</a>
            </div>
        
      </form>
    </div>
  </div>
  <!-- Pills content -->  

</div>
</div>
</div>
<div class="modal" idt="#confirmModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Profil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Simpan Perubahan Profil?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Iya</button>
      </div>
    </div>
  </div>
</div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>