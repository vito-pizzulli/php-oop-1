<?php
    include_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP8 1</title>
    <link rel="stylesheet" href="styles/style.css">

    <!-- Google Fonts Open Sans 400-600-700 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <h1>PHP8 OOP 1 - Movies</h1>
        <?php
            echo $harryPotter1->getMovieInfo();
            echo $spidermanNoWayHome->getMovieInfo();
            echo $unaNotteDaLeoni->getMovieInfo();
        ?>
    </main>
</body>
</html>