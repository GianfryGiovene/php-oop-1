<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php 
include './entities/movie.php';

$movie_1 = new Movie(10);
$movie_2 = new Movie(4);



$movie_1->title = 'Rosso di sera';
$movie_1->genre = 'Horror';

$movie_2->title = 'Verdone di mattina';
$movie_2->genre = 'Thriller';

var_dump($movie_1);
echo '</br>';
echo "valutazione film: $movie_1->rating / 10";
echo '</br>';
echo $movie_1->titleAndGenre();
echo '</br>';
var_dump($movie_2);
echo '</br>';
echo "valutazione film: $movie_2->rating / 10";
echo '</br>';
echo $movie_2->titleAndGenre();

?>