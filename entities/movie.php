<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
    class Movie {
        public $title;
        public $genre;
        public $rating = 0;

        function __construct($_rating){
            $this->rating = $_rating;
        }   

        public function titleAndGenre(){
            if($this->rating > 6){
                return "$this->title - $this->genre";
            }
            else{
                return "Il film non merita di essere visto";
            }
        }
    }
    
    
?>

