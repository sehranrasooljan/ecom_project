<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>signup</title>

    <style>
        .xyz {
            align-items: center;
            margin-left: 200px;
            margin-right: 200px;

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
        <div class="container-fluid box">
            <a class="navbar-brand" href="#">Ecom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About </a>
                    </li>
                  
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us </a>
                    </li>


                </ul>
                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                </form>
                <div class="mx-2">
          <a type="submit" class="btn btn-danger" href="login.php"> Login </a>  </button>
    
          <a type="submit" class="btn btn-danger" name="btsignup"> Signup </a>  </button>
        </div>


                </div>



            </div>
        </div>
    </nav>
    <div class="heading">
        SignUp In Ecom
    </div>
    <div class="container xyz">
        <div class="modal-body">


            <form name="f1" action="signup.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" maxlength="10" name="t1" class="form-control" id="username" placeholder="username Here" required="">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="Email" name="t2" id="email" class="form-control" placeholder="Email Here">
                </div>

                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="Password"  name="p1" class="form-control" id="Password" placeholder="Password Here" required="">
                </div>

                <div class="mb-3">
                    <label for="Confirm" class="form-label">Confirm Password</label>
                    <input type="Password" name="p2" class="form-control" id="Confirm" placeholder=" Confirm Password" required="">
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="t3" class="form-control" id="age" placeholder="Age here" required="">
                </div>

                <div class="mb-3">
                    <label for="sq" class="form-label">Security Question</label>
                    <select name="s1" class="form-label" id="sq">
                        <option>Your First School</option>
                        <option>Your Pet Name</option>
                        <option>Your Mothers Name</option>
                        <option>Your Date Of Birth</option>
                        <option>Your Fav Dish</option>
                        <option>Your Fav Movie</option>
                        <option>Your Fav Actor/Actress</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="sa" class="form-label">Security Answer</label>
                    <input type="text" name="s2" class="form-control" id="sa" placeholder="Security Answer Here" required="">
                </div>
             
        


        

<div class="d-grid gap-2">
<button class="btn btn-success" type="submit" name="btsignup">Signup</button>
  <a class="btn btn-danger" type="button" href="login.php" name="loginbt">login </a>
</div>

    
      

    </div>  

    </div>  
        </form>
        
<div class="footer">

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->


    <?php
if(isset($_POST['btsignup']))
{
$u=$_POST['t1'];
$e=$_POST['t2'];
$p=$_POST['p1'];
$cp=$_POST['p2'];
$a=$_POST['t3'];
$sq=$_POST['s1'];
$sa=$_POST['s2'];

if($p==$cp)
{
   

$conn=new mysqli("localhost","root","","ecom");
if($conn==true)
{
        $cmd ="INSERT INTO `users` (`u`, `e`, `p`, `a`, `sq`, `sa`) VALUES ('$u', '$e', '$p', '$a', '$sq', '$sa')";
	if ($conn->query($cmd)==true)
	{
		echo "Account Registerd Sucessfully";

	}
	else
	{
		echo "Error: Query Problem while Inserting The Data";
	}

}
else
	{
		echo "Connection Error";
	}
}
else
{
	echo "Password not match with Confirm Password";
}
}
?>






</body>

</html>