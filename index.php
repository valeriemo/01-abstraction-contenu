<?php
require_once("data.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php foreach ($data["sections"] as $section): ?>

        <section>
            <h1><?= $section["nom"]?></h1>
            <p><?php if (isset($section["description"])) echo $section["description"] ?></p>

        </section>
        <?php endforeach; ?>
    </main>
    
</body>
</html>