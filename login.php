<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>Admin Login</title>

  <style>
    container {
      align-items: center;
      margin-left: 200px;
      margin-right: 300px;

    }

    .heading {
      text-align: center;
      font-size: 30px;
      text-decoration: underline;
      margin-top: 5px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sehran's ECOM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Account
            </a>
            <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Create A New Account</a></li>
              <li><a class="dropdown-item" href="#">Already Have An Account</a></li>

            </ul> -->
          <li class="nav-item">
            <a class="nav-link" href="contect.php">Contect Us </a>
          </li>


        </ul>
        <form class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
          <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
        </form>






      </div>
    </div>
  </nav>
  <div class="heading">
   Sehran's ECOM
  </div>
  <div class="container">
    <div class="modal-body">
      <form name="f2" action="login.php" method="Post">

        <div class="mb-3">
          <label for="exampleInputuser1" class="form-label">Username </label>
          <input type="text" name="lt1" class="form-control" placeholder="username here">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="Password" name="lp1" class="form-control" placeholder="Password here">

          <div class="d-grid gap-2 d-md-block mt-3">

            <button class="btn btn-primary" type="submit" name="loginbt">login</button>
            <button class="btn btn-primary" type="submit" name="btsignup">Signup</button>
          </div>


      </form>



      <?php

if(isset($_POST['loginbt']))
{
session_start();
$u=$_POST['lt1'];
$p=$_POST['lp1'];
$_SESSION['un']=$u;
$con=new mysqli("localhost","root","","ecom");
if($con==true)
{
$cmd="select * from users where u='$u'  and p='$p'";
if($y=$con->query($cmd))
{
if($y->num_rows>0)
{

// $_SESSION['em']=$e;
header("location:admin.php");
}
else
{
echo "ERROR: Not a valid Username or Password";
}
}
else
{
echo "ERROR: Query Prob in Select";
}
}

else
{
echo "ERROR: Connection Problem";
}

}
?>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>