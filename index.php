<?php


include 'Models/_Movie.php';
include 'db.php';


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>



    <header>
        <nav class="navbar navbar-light bg-dark">
            <div class="col-12 container d-flex justify-content-around ">
                    <img class="rounded-circle" src="https://img.freepik.com/premium-vector/colorful-bird-illustration-gradient-abstract_343694-1740.jpg" width="60" height="60" alt="">
                    <h1 class="text-white text-uppercase font-weight-bold">Best Movies</h1>
            </div>
        </nav>
    </header>


    
    <main class="d-flex bg-info flex-wrap pt-3 justify-content-center">
        <?php foreach ($Movies as $movie) { ?>
            <div class="col-2 m-2 d-flex flex-direction-column align-items-stretch">
                <div class="card">
                    <img class="card-img-top" width="50" height="200" src="<?php echo $movie->img ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->title; ?></h5>
                        <p><?php echo $movie->description; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $movie->author; ?></li>
                        <li class="list-group-item"><?php echo $movie->genre; ?></li>
                    </ul>
                </div>
            </div>
        <?php  } ?>
    </main>









</body>
</html>

