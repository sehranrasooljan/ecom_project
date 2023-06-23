<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Document</title>
</head>
<body>
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sehran's ECOM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <div class="mx-2">
          <a type="submit" class="btn btn-danger" href="logout.php"> Signout </a>  </button>

        </div>
       
      </div>
    </div>
  </nav>

  <div class="container">
    <h1><center>
      Admin Pannel
    </center></h1>
    <h2>Add Products</h2>
  <!-- form start -->
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group" >
      <label for="exampleInputEmail1">Enter Product Name</label>
      <input type="text" name="prod_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
    
    </div>
    <div class="form-group">
      <label for="exampleInputprice">Product Price</label>
      <input type="text"name="prod_price" class="form-control" id="exampleInputprice" placeholder="Enter Product Price">
    </div>
    <div class="form-group">  
      <label for="exampleInputdescription">Product Description</label>
      <textarea name="prod_description" class="form-control" id="exampleInputdescription" cols="30" rows="10">  </textarea>
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputProductImage">Upload Product Image</label> -->
        <!-- <input type="file" class="form-control" id="exampleInputProductImage"accept="image/*" name="prodimage" onchange="loadFilep(event,0)" required /> -->
        <!-- <input type="text" name="prod_url" class="form-control" id="exampleInputProductImage" aria-describedby="emailHelp" placeholder="Enter Product URL">
    
      </div> -->


    <button type="submit" name="uploadproduct" class="btn btn-primary mt-2">Add Product</button>
  </form>
 </div>

 <?php

// if(isset($_POST['uploadproduct']))
// {
//     // echo "<script>alert('clicked');</script>";
//     //uploa dprohgile img
//     // $filename = $user_id;
//     $prod_name = $_POST['prod_name'];
//     $prod_price = $_POST['prod_price'];
//     $prod_description = $_POST['prod_description'];
    // $prod_url = $_POST['prod_url'];


    // //img upload
    // // $filename .= ".jpg";
    // $prodimage = $_FILES["prodimage"]["tmp_name"];
    // $folderprofile = "./prodimage/".$filename;
    
    // $file_size_profile = $_FILES["prodimage"]['size'];
    // if (($file_size_profile  > 250000)){      
    //     echo '<script type="text/javascript">alert("File size too large. File must be less than 200KB.");</script>'; 
    // }
    // else
    // {
    // move_uploaded_file($prodimage,$folderprofile);
    //   $sql_profiepicupload = "UPDATE `tbl_products` SET `img`='1' WHERE `user_id` = {$user_id}";
    // if(mysqli_query($conn,$sql_profiepicupload)){
    //   echo '<script>
    //   alert("Profile Pic Uploaded !");
    //   window.location.replace("admin.php");</script>'; 
    // }
    // }
// ---end img upload---



// Set your connection variables
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ecom";

// ?>





<?php
if (isset($_POST['uploadproduct'])) {
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_description = $_POST['prod_description'];

    $conn = new mysqli("localhost", "root", "", "ecom");
    if ($conn == true) {
        $cmd = "INSERT INTO `tbl_products` (`prod_name`, `prod_price`, `prod_description`) VALUES ('$prod_name', '$prod_price', '$prod_description');";
        if ($conn->query($cmd) == true) {
            echo "Product Stored Successfully";
        } else {
            echo "Error: Query Problem while Inserting The Data";
        }
    } else {
        echo "Connection Error";
    }
}
?>


<!-- form end -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>