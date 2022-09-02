<!-- nome repo: php-oop-1
Creare un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
    require_once __DIR__ . '/classes/Movie.php';

    $movie_1 = new Movie("Inception", "United States, United Kingdom", "Romance, Action, Mystery", "2010-07-16", "Christopher Nolan",  "8.80", "2h 28m" );
    $movie_2 = new Movie("Avengers: Endgame", "United States", "Sci-Fi, Adventure, Action, Fantasy", "2019-04-22", "Anthony Russo,Joe Russo","8.40", "3h 2m");
    $movie_3 = new Movie("Joker", "United States, Canada", "Drama, Thriller, Crime", "2019-08-31", "Todd Phillips", " 8.40 ", "2h 2m");

    $movies = [$movie_1, $movie_2, $movie_3 ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <h1>MOVIE LIST</h1>

    



    
</body>
</html>