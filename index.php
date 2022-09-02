<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
 class Movie{

    public $name;
    public $releaseYear;
    public $director;
    public $genre;

    function __constructor($name, $releaseYear, $director, $genre){
        $this->name = $name;
        $this->releaseYear = $releaseYear;
        $this->director = $director;
        $this->genre = $genre;
    }
    function get_name(){
        return $this-> name;
    }
    
    function get_releaseYear(){
        return $this->releaseYear;
    }
    
    function get_director(){
        return $this->director;
    }
    
    function get_genre(){
        return $this->genre;
    }
}

$movieOne = new Movie("interstellar", "2018", "Nolan", "Sci-fi");
var_dump($movieOne);

?>

</body>
</html>
