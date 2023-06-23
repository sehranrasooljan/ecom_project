<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- link connect -->
    <link rel="stylesheet" href="css/style.css">


    <title>Home Page</title>

  
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid box">
            <a class="navbar-brand" href="#">Sehran's Ecom</a>
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

<!-- ---crausal start  -->
<div class="container-fluid">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/2.jpg " alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/3.jpg"  alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="products">
    <!-- heading in center -->
<div class="heading mt-3">
<u> <h1><center>Products</center></h1></u>
</div>
<!-- -------------showing the products ------- -->
<?php
include('connection.php');

$query = "SELECT * FROM tbl_products";
$result = mysqli_query($connection, $query);

// Check if the query was successful    
if ($result) {
  echo '<div class="card-container">'; // Start the card container

  while ($row = mysqli_fetch_assoc($result)) {
    // Extract the necessary information
    $prod_name = $row['prod_name'];
    $prod_price = $row['prod_price'];
    $prod_description = $row['prod_description'];
    // $image = $row['image_url'];

    // Display the data in responsive cards
    echo '<div class="card">';
    echo '<img src="images/1.jpg" alt="image">';
    // echo '<img src="' . $image . '" alt="' . $name . '">';
    echo '<h3>' . $prod_name . '</h3>';
    echo '<p>' . $prod_description . '</p>';
    echo '<div class="card-footer">';
    echo '<span class="price">Price: $' . $prod_price . '</span>';
    echo '<button class="btn btn-primary add-to-cart">Add to Cart</button>';
    echo '</div>';
    echo '</div>';
  }

  echo '</div>'; // End the card container

  // Free the result set
  mysqli_free_result($result);
} else {
  // Display an error message if the query failed
  echo 'Error: ' . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>





    
</div>
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>About</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque nisl eu dapibus dictum. Sed in fringilla ex. Aenean accumsan risus eget magna bibendum, vel mollis erat venenatis.</p>
      </div>
      <div class="col-md-6">
        <h4>Contact</h4>
        <ul class="contact-info">
          <li><i class="fa fa-envelope"></i> info@example.com</li>
          <li><i class="fa fa-phone"></i> +91 1234567890</li>
          <li><i class="fa fa-map-marker"></i> Punjab India</li>
        </ul>
      </div>
    </div>
  </div>
</footer>


</body>

</html>