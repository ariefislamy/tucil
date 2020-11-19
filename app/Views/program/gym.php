<head>
<title>Gym</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/jquery.js"></script> 
<script src="bootstrap/js/popper.js"></script> 
<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">PLATINUM GYM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8080/dashboard">Home</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programs <span class="sr-only">(current)</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost:8080/gym">Gym</a>
          <a class="dropdown-item" href="http://localhost:8080/martial">Martial Art</a>
          <a class="dropdown-item" href="http://localhost:8080/aerobic">Aerobic</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8080/about">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="emas.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Gold Member</h5>
      <p class="card-text">Bebas GYM selama 1 tahun, dengan waktu yang bisa ditentukan sendiri.</p>
      <p><strong>Rp.1.000.0000</strong></p>
      <a href="http://localhost:8080/notif" class="btn btn-dark">Daftar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="perak.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Silver Member</h5>
      <p class="card-text">Bebas GYM selama 1 bulan, dengan waktu yang bisa ditentukan sendiri.</p>
      <p><strong>Rp.100.000</strong></p>
      <a href="#" class="btn btn-dark">Daftar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="perunggu.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Bronze Member</h5>
      <p class="card-text">Bebas GYM hanya 1 hari, dengan waktu yang bisa ditentukan sendiri.</p>
      <p><strong>Rp.15.000</strong></p>
      <a href="" class="btn btn-dark">Daftar</a>
    </div>
  </div>
</div>
</body>