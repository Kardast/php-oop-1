<?php
class Movie {

    static public $counter_of_objects = 0;

    public $name;
    public $genre;
    public $nationality;
    public $film_length;
    public $director;
    public $year;
    public $available = true;

    function __construct($c_name, $c_genre, $c_nationality, $c_film_length, $c_director, $c_year)
    {
        $this->name = $c_name;
        $this->genre = $c_genre;
        $this->nationality = $c_nationality;
        $this->film_length = $c_film_length;
        $this->director = $c_director;
        $this->year = $c_year;

        self::$counter_of_objects++;
    }

}

$scarface = new Movie('Scarface', 'Gangster', 'USA', '170 min', 'Brian De Palma', 1983);
// $scarface->name = "Scarface";
// $scarface->genre = "Gangster";
// $scarface->nationality = "USA";
// $scarface->film_length = "170 min";
// $scarface->director = "Brian De Palma";
// $scarface->year = 1983;

var_dump($scarface);


echo '<br>Gli oggetti di tipo Movie instanziati sono ' . Movie::$counter_of_objects;