<html>
    <head>
        <title>UniFind: Donasi</title>
        <!-- Bootstrap CSS -->
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
 
  <!-- Pills navs -->
  
  <!-- Pills content -->
  <div class="tab-content">
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
      <form>
        <h3>Donasi</h3>
        <br>
        <div class="form-outline mb-3">
            <label class="form-label" for="nama">Nama donatur</label>
            <input type="text" id="nama" placeholder="Nama" class="form-control" />
          </div>
        <div class="form-outline mb-3">
          <label class="form-label" for="no-telp">No. Telp</label> 
          <input type="text" id="notelp" placeholder="No. telepon"class="form-control" />
        </div>
          <div class="form-outline mb-3">
          <label class="form-label" for="metode-bayar">Metode pembayaran</label> 
          <div class="row mb-3">
            <!--ppal-->
              <div class="col">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-4" style="border-radius: 15px; height: 150px; background-color:darkblue">
                    <p style="color:#e7f0ff">Paypal</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-4" style="border-radius: 15px; height: 150px; background-color:orange">
                    <p style="color:white">Transfar Bank</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-4" style="border-radius: 15px; height: 150px; background-color:lightblue">
                    <p style="color:white">Dana/Gopay</p>
                  </div>
                </div>
              </div>
          </div>
        <div class="form-outline mb-3">
          <label class="form-label" for="total-donasi">Total donasi</label> 
          <input type="text" id="donasi" placeholder="Rp." class="form-control" /> 
        </div>
        <div class="form-outline mb-3">
          <label class="form-label" for="customFile">Upload bukti pembayaran</label>
          <input type="file" class="form-control" id="customFile" />
        </div>    
        <!-- buttons -->
        <div class="row">
            <div class="col">
                <a data-toggle="modal" data-target="#confirmModal" type="submit" class="btn btn-primary btn-block" style="width: 100%">Submit</a>
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
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>  