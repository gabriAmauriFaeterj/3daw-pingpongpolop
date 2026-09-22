<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ping Pong Ploc</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Números de 1 a 100</h1>

    <ol>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "<li>$i - ok";

            if ($i % 3 == 0 && $i % 5 == 0) {
                echo " <u>ploc</u>";
            } elseif ($i % 3 == 0) {
                echo " <strong>ping</strong>";
            } elseif ($i % 5 == 0) {
                echo " <em>pong</em>";
            }

            echo "</li>";
        }
        ?>
    </ol>

</body>
</html>
