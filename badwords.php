<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censorship Result</title>
</head>
<body>
    <h1>Censorship Result</h1>

    <h2>Paragrafo originale (lunghezza = <?php echo strlen($_GET['paragraph']); ?>)</h2>
    <p>
        <?php
        echo $_GET['paragraph'];
        ?>
    </p>

    <?php
        $censored = str_replace($_GET['badword'], "***", $_GET['paragraph']);
    ?>

    <h2>Paragrafo censurato (lunghezza = <?php echo strlen($censored); ?>)</h2>
    <p>
        <?php
        echo $censored;
        ?>
    </p>
</body>
</html>