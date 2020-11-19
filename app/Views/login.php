<head>
<title>Login</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/global.css">
<script src="bootstrap/js/jquery.js"></script> 
<script src="bootstrap/js/popper.js"></script> 
<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <section class="container-fluid bg">
      <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container">
            <h5 class="text-center">
            <span class="font-weight-bold text-dark">LOGIN</span></h5>
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="EnterEmail">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <a href="http://localhost:8080/dashboard" class="btn btn-dark btn-block">Login</a>
            </form>
        </section>
      </section>
    </section>
</body>
