<?php

class Movie {
    public $img;
    public $title;
    public $author;
    public $genre;
    public $description;
    

    public function __construct($_img, $_title, $_author, $_genre, $_description){
        $this->img = $_img;
        $this->title = $_title;
        $this->author = $_author;
        $this->genre = $_genre;
        $this->description = $_description;
    }


    
}

$newMovie = new Movie('https://us.123rf.com/450wm/latkun/latkun2103/latkun210301756/166563011-vista-frontale-sacco-di-iuta-con-patate-risoluzione-e-bella-foto-di-alta-qualit%C3%A0.jpg?ver=6', 'La carica dei 1024', 'Marinetti Gianbuongiorgio', 'Dramma-Comico', 'Il buon Nando raccoglie 1024 sacchi di patate');
$newMovie2 = new Movie('https://m.media-amazon.com/images/I/71quHWwl3TL._AC_UY300_.jpg', 'Gli anelli del signor Edd Egli', 'Franco Papetti', 'Storico', 'Il papa vuole tutti gli anelli di Edd Egli perchè Edd è Il signore degli anelli');
$newMovie3 = new Movie('https://www.slovenia.info/imagine_cache/300x300_thumb/uploads/gallery/209/ztr_nocno_kopanje.jpeg', 'Guerre Termali', 'Maurizio Izzi', 'Fantascienza', 'Chi sopravviverà alle Guerre termali? i Sith o i Mich');
$newMovie4 = new Movie('https://us.123rf.com/450wm/barmalini/barmalini2101/barmalini210100713/162078542-collezione-di-formaggi-formaggi-francesi-beaufort-abondance-emmental-tomme-de-savoie-serviti-all.jpg?ver=6', 'Sognando Emmenthal', 'Valeria Sergiuzzi', 'Sport', 'L ispettor Luigi alle prese con un caso di formaggite acuta');

$Movies = [$newMovie, $newMovie2, $newMovie3, $newMovie4, $newMovie, $newMovie2, $newMovie3, $newMovie4, $newMovie2, $newMovie3];



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

