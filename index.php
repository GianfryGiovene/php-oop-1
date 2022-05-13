<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php 
include './entities/movie.php';

$movie_1 = new Movie(10,2008);
$movie_2 = new Movie(5,'528_d.c.');

$moviesARaffica = [
    $movieR_1= new Movie(10,2008),
    $movieR_2 = new Movie(6,'528_d.c.'),
    $movieR_3 = new Movie(3, 1800),
];

$movie_1->title = 'Rosso di sera';
$movie_1->genre = 'Horror';

$movie_2->title = 'Verdone di mattina';
$movie_2->genre = 'Thriller';

// prime prove
// movie_1
echo '<pre>';
echo "title: $movie_1->title ";
echo '</br>';
echo "year: $movie_1->year ";
echo '</br>';
echo "genre: $movie_1->genre ";
echo '</br>';
echo "valutazione film: $movie_1->rating / 10";
echo '</pre>';
echo $movie_1->titleAndGenre();
echo '</br>';
// movie_1
echo '<pre>';
echo "title: $movie_2->title ";
echo '</br>';
echo "year: $movie_2->year ";
echo '</br>';
echo "genre: $movie_2->genre ";
echo '</br>';
echo "valutazione film: $movie_2->rating / 10";
echo '</pre>';
echo $movie_2->titleAndGenre();
// prime prove

// proviamo l'array


?>

