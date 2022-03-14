<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise challenge</title>
    <link href="ex-cha.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="car.png" alt="" width="40" height="25"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Rent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Support</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php 
$cars = array("Audi" => array(
                "A1" => array(
                    "available" => "yes",
                    "price" => 2000,
                    "location" => "somewhere"),
                "A2" => array(
                    "available" => "no",
                    "price" => 2300,
                    "location" => "somewhere"),
                "A3" => array(
                    "available" => "yes",
                    "price" => 1800,
                    "location" => "somewhere")
                ),
                "BMW" => array(
                    "X1" => array(
                        "available" => "no",
                        "price" => 2000,
                        "location" => "somewhere"),
                    "X2" => array(
                        "available" => "no",
                        "price" => 2300,
                        "location" => "somewhere"),
                    "X3" => array(
                        "available" => "yes",
                        "price" => 1800,
                        "location" => "somewhere")
                    ),
                "VW" => array(
                "golf" => array(
                    "available" => "yes",
                    "price" => 2000,
                    "location" => "somewhere"),
                "touran" => array(
                    "available" => "yes",
                    "price" => 2300,
                    "location" => "somewhere"),
                "arteon" => array(
                    "available" => "no",
                    "price" => 1800,
                    "location" => "somewhere")
                )
);
?>

<div class="container mb-5 mt-5">
    <div class="row row-cols-3 justify-content-around">
    <div class="col mb-5 mt-5">    
        <div class="card" style="width: 18rem;">
            <img src="carcard.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo array_keys($cars)[0]; ?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo 'Model: '.array_keys($cars[array_keys($cars)[0]])[0]; ?></li>
                <li class="list-group-item"><?php echo 'Available: '.$cars["Audi"]["A1"]["available"]; ?></li>
                <li class="list-group-item"><?php echo 'Price: '.$cars["Audi"]["A1"]["price"]; ?></li>
                <li class="list-group-item"><?php echo 'Location: '.$cars["Audi"]["A1"]["location"]; ?></li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">More Info</a>
                <a href="#" class="card-link">Rent car</a>
            </div>
            </div>
        </div>

        <div class="col mb-5 mt-5">
        <div class="card" style="width: 18rem;">
        <img src="carcard.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo array_keys($cars)[0]; ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo 'Model: '.array_keys($cars["Audi"])[1]; ?></li>
            <li class="list-group-item"><?php echo 'Available: '.$cars["Audi"]["A2"]["available"]; ?></li>
            <li class="list-group-item"><?php echo 'Price: '.$cars["Audi"]["A2"]["price"]; ?></li>
            <li class="list-group-item"><?php echo 'Location: '.$cars["Audi"]["A2"]["location"]; ?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">More Info</a>
            <a href="#" class="card-link">Rent car</a>
        </div>
        </div>
        </div>

        <div class="col mb-5 mt-5">
        <div class="card" style="width: 18rem;">
        <img src="carcard.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo array_keys($cars)[0]; ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo 'Model: '.array_keys($cars["Audi"])[2]; ?></li>
            <li class="list-group-item"><?php echo 'Available: '.$cars["Audi"]["A3"]["available"]; ?></li>
            <li class="list-group-item"><?php echo 'Price: '.$cars["Audi"]["A3"]["price"]; ?></li>
            <li class="list-group-item"><?php echo 'Location: '.$cars["Audi"]["A3"]["location"]; ?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">More Info</a>
            <a href="#" class="card-link">Rent car</a>
        </div>
        </div>
        </div>

        <div class="col mb-5 mt-5">
        <div class="card" style="width: 18rem;">
        <img src="cars1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo array_keys($cars)[1]; ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo 'Model: '.array_keys($cars["BMW"])[0]; ?></li>
            <li class="list-group-item"><?php echo 'Available: '.$cars["BMW"]["X1"]["available"]; ?></li>
            <li class="list-group-item"><?php echo 'Price: '.$cars["BMW"]["X1"]["price"]; ?></li>
            <li class="list-group-item"><?php echo 'Location: '.$cars["BMW"]["X1"]["location"]; ?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">More Info</a>
            <a href="#" class="card-link">Rent car</a>
        </div>
        </div>
        </div>

        <div class="col mb-5 mt-5">
        <div class="card" style="width: 18rem;">
        <img src="cars1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo array_keys($cars)[1]; ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo 'Model: '.array_keys($cars["BMW"])[1]; ?></li>
            <li class="list-group-item"><?php echo 'Available: '.$cars["BMW"]["X2"]["available"]; ?></li>
            <li class="list-group-item"><?php echo 'Price: '.$cars["BMW"]["X2"]["price"]; ?></li>
            <li class="list-group-item"><?php echo 'Location: '.$cars["BMW"]["X2"]["location"]; ?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">More Info</a>
            <a href="#" class="card-link">Rent car</a>
        </div>
        </div>
        </div>

        <div class="col mb-5 mt-5">
        <div class="card" style="width: 18rem;">
        <img src="cars1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo array_keys($cars)[1]; ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo 'Model: '.array_keys($cars["BMW"])[2]; ?></li>
            <li class="list-group-item"><?php echo 'Available: '.$cars["BMW"]["X3"]["available"]; ?></li>
            <li class="list-group-item"><?php echo 'Price: '.$cars["BMW"]["X3"]["price"]; ?></li>
            <li class="list-group-item"><?php echo 'Location: '.$cars["BMW"]["X3"]["location"]; ?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">More Info</a>
            <a href="#" class="card-link">Rent car</a>
        </div>
        </div>
        </div>
    </div>
</div>


<footer class="bg-dark text-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-light" href="#">UberCar-rental.com</a>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>