<?php

class Movie {
    public $title;
    public $author;
    public $genre;
    public $description;

    public function __construct($_title, $_author, $_genre, $_description){
        $this->title = $_title;
        $this->author = $_author;
        $this->genre = $_genre;
        $this->description = $_description;
    }


    
}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie PHP</title>
</head>
<body>
    
<?php
$newMovie = new Movie('La carica dei 1024', 'Marinetti Gianbuongiorgio', 'Dramma-Comico', 'Il buon Nando raccoglie 1024 sacchi di patate');
$newMovie2 = new Movie('Gli anelli del signor Edd Egli', 'Franco Papetti', 'Storico', 'Il papa vuole tutti gli anelli di Edd Egli perchè Edd è Il signore degli anelli');

$Movies = [$newMovie, $newMovie2];
?>



    <main>
        <?php foreach ($Movies as $movie) { ?>
            <section >
                <div> 
                    <h2><?php echo $movie->title; ?></h2>
                    <p><?php echo $movie->author; ?></p>
                    <p><?php echo $movie->genre; ?></p>
                    <p><?php echo $movie->description; ?></p>
                </div>
            </section>
        <?php  } ?>
    </main>









</body>
</html>

