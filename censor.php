<?php 

// prendo il parametro paragraph dall'url
$paragraph = $_GET['paragraph'];

// prendo il parametro censor-word dall'url
$censor_word = $_GET['censor-word'];



// censuro il paragrafo e lo salvo in una variabile
$censored_paragraph = str_replace($censor_word, '***', $paragraph);

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Badwords censurata</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container py-5">
        <h1 class="mb-3">PHP - Badwords censurata</h1>

        <div class="mb-4 bg-warning p-3 rounded-2 ">

            <div class="mb-5">
                <h2>
                    Paragrafo originale:
                </h2> 
                <p>
                    <?php 
                    
                    echo $paragraph;
    
                    ?>
                </p>
                <h3>
                    Lunghezza del paragrafo: <?php echo strlen($paragraph) ?> caratteri.
                </h3>
            </div>
    
            <div class="mb-3">
                <h2>
                    Parola da censurare:
                </h2>
                <pre><?php echo $censor_word ?></pre>
            </div>

        </div>

        <hr>

        <div class="mb-3">
            <h2>
                Paragrafo censurato: <small>(lunghezza: <?php echo strlen($censored_paragraph) ?> caratteri)</small>
            </h2>

            <p class="border border-2 p-3 rounded-2">
                <?php 

                echo $censored_paragraph

                ?>
            </p>
        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>