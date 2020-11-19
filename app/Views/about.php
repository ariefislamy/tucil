<head>
<title>About</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/jquery.js"></script> 
<script src="bootstrap/js/popper.js"></script> 
<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PLATINUM GYM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8080/dashboard">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost:8080/gym">Gym</a>
          <a class="dropdown-item" href="http://localhost:8080/martial">Martial Art</a>
          <a class="dropdown-item" href="http://localhost:8080/aerobic">Aerobic</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8080/about">About <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="row justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
     <img class="card-img-top" src="gym.jpg" alt="Card image cap">
     <div class="card-body">
       <h5 class="card-title">Platynum Gym</h5>
       <p class="card-text">Mari Bergabung Bersama Kami!!!</p>
       <a href="https://maps.app.goo.gl/pRMkTNMwut56uJHp6" class="btn btn-dark btn-sm">Location</a>
     </div>
    </div>
</div>
</body>