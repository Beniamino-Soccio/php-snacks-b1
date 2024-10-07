<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="snack5.php" method="GET">
                    <div class="mb-3">
                        <label for="word" class="form-label">parola</label>
                        <input type="text" class="form-control" id="word" name="word" placeholder="otto">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?= ispalindrome($_GET["word"]) ?>
            </div>
        </div>
    </main>
</body>
</html>