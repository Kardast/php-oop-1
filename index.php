<?php
class Movie {

    static public $counter_of_objects = 0;

    public $name;
    public $genre;
    public $nationality;
    public $film_length;
    public $director;
    public $year;
    public $quantity;
    public $available = true;

    public function __construct($c_name, $c_genre, $c_nationality, $c_film_length, $c_director, $c_year, $c_quantity)
    {
        $this->name = $c_name;
        $this->genre = $c_genre;
        $this->nationality = $c_nationality;
        $this->film_length = $c_film_length;
        $this->director = $c_director;
        $this->year = $c_year;
        $this->quantity = $c_quantity;

        $this->movieAvailability();

        self::$counter_of_objects++;
    }

    public function movieAvailability() {
        if ($this->quantity < 1) {
            $this->available = false;
        }
    }

}


$scarface = new Movie('Scarface', 'Gangster', 'USA', '170 min', 'Brian De Palma', 1983, 10);
$the_dark_knight = new Movie('The Dark Knight', 'Action', 'UK, USA', '152 min', 'Christopher Nolan', 2008, 0);
// $scarface->name = "Scarface";
// $scarface->genre = "Gangster";
// $scarface->nationality = "USA";
// $scarface->film_length = "170 min";
// $scarface->director = "Brian De Palma";
// $scarface->year = 1983;

var_dump($scarface, $the_dark_knight);


echo '<br>Gli oggetti di tipo Movie instanziati sono ' . Movie::$counter_of_objects;