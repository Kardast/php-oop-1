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
    public $message = '';

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
            $this->message = 'Non disponibile';
        } else {
            $this->message = 'Disponibile';
        }
    }

}
