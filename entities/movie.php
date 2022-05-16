<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
    class Movie {
        public $title;
        public $genre;
        public $year;   
        public $rating = 0;
        
        

        function __construct($_rating,$_year){
            $this->rating = $_rating;
            $this->year = $_year;
            $this->removeForData($_year,2000);
        }   

        public function titleAndGenre(){
            
            if($this->rating <= 5){

                return "Il film non merita di essere visto";

            }elseif($this->rating < 8){

                return "Discreto film da vedere!";

            }else{

                return "Ottimo film da vedere!";

            }
        }
            
    }
    
    
?>

