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
    <header>
        <h1>PHP8 OOP 1</h1>
    </header>
    <main>
        <?php
            echo $harry_potter_1->getMovieInfo();
            echo $spiderman_no_way_home->getMovieInfo();
        ?>
    </main>
</body>
</html>