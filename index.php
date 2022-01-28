<?php
    require_once __DIR__.'/classes/movie.php';

    $movies = [
        new Movie("Gran Torino", 2008, "1h 56m", 8.1, "Clint Eastwood"/*, (array)$attori*/),
        new Movie("Il fotografo di Mauthausen", 2018, "1h 50m", 6.8, "Mar Targarona"/*, (array)$attori*/),
        new Movie("V per Vendetta", 2005, "2h 12m", 8.1, "James McTeigue"/*, (array)$attori*/)
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: grey; color: #fff;">
    <h1>Movies</h1>
    <?php foreach($movies as $movie) { ?>
        <div>
            <h3><?php echo $movie->title?></h3>
            <ul>
                <li>Anno: <?php echo $movie->year?></li>
                <li>Durata: <?php echo $movie->time?></li>
                <li>Voto: <?php echo $movie->IsABeautifulFilm()?></li>
                <li>Regista: <?php echo $movie->director?></li>
                <!-- <li>Lista attori:
                    <ul>
                        <?php // foreach($movies as $movie){ ?>
                            <?php // foreach($movie as $actors => $attori){ ?>
                                <li></li>
                            <?php // } ?>
                        <?php // } ?>
                    </ul>
                </li> -->
            </ul>
        </div>
    <?php } ?>
</body>
</html>