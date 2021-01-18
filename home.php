<?php
    include_once __DIR__ . '/classes/Celebrities.php';
    include_once __DIR__ . '/classes/Nowadays.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>

    <h1>NBA STORE</h1>

    <main>
        <h2>NBA Vintage</h2>
        <section>
            <?php
                $celebrities = new Celebrities('T-Shirt-BostonCeltics-Vintage' , 33 , 'Larry Bird' , 1984 );
            ?>
            <h4>Title : <?php echo $celebrities->title ?></h4>
            <h4>Number : <?php echo $celebrities->number ?></h4>
            <h4>Player : <?php echo $celebrities->player ?></h4>
            <h4>Season : <?php echo $celebrities->season ?></h4>
        </section>
        <h2>2021 NBA Teams</h2>
        <section>
            <?php
                $nowadays = new Nowadays('T-Shirt-GoldenStateWarriors-2021' , 30 , 'Stephen Curry' , '5 Stars');
            ?>
            <h4>Title : <?php echo $nowadays->title ?></h4>
            <h4>Number : <?php echo $nowadays->number ?></h4>
            <h4>Player : <?php echo $nowadays->player ?></h4>
            <h4>Rating : <?php echo $nowadays->rating ?></h4>
        </section>
    </main>
    
</body>
</html>