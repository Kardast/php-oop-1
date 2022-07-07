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


$scarface = new Movie('Scarface', 'Gangster', 'USA', '170 min', 'Brian De Palma', 1983, 10);
$scarArray = (array) $scarface;
$the_dark_knight = new Movie('The Dark Knight', 'Action', 'UK, USA', '152 min', 'Christopher Nolan', 2008, 0);
$knightArray = (array) $the_dark_knight;



// var_dump($scarface, $the_dark_knight);
// var_dump($scarArray);
// echo '<br>Gli oggetti di tipo Movie instanziati sono ' . Movie::$counter_of_objects;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP1</title>
</head>
<body>

<?php foreach ($scarArray as $key => $value) { ?>
    <h2><?php echo $value ?></h2> <?php
} ?>

<br>

<?php foreach ($knightArray as $key => $value) { ?>
    <h2><?php echo $value ?></h2> <?php
} ?>

</body>
</html>