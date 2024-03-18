<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Badwords</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container py-5">
        <h1>PHP - Badwords</h1>

        <form action="censor.php">
            <div class="mb-3">
                <label for="paragraph" class="form-label">Paragrafo</label>
                <textarea class="form-control" name="paragraph" id="paragraph" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="censor-word" class="form-label">Parola da censurare</label>
                <input type="text" name="censor-word" class="form-control" id="censor-word" placeholder="***">
            </div>


            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>