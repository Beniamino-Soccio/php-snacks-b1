

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main>
        <form action="snack-2/reply2.php" method="GET" class="p-5">
        <div>
            <label for="userName" class="form-label">inserisci il tuo nome</label>
            <input type="text" class="form-control" id="userName" name="userName" placeholder="Beniamino">
        </div>
        <div>
            <label for="userMail" class="form-label">inserisci la tua email</label>
            <input type="text" class="form-control" id="userMail" name="userMail" placeholder="Beniamino@gmail.com">
        </div>
        <div>
            <label for="userAge" class="form-label">inserisci la tua età</label>
            <input type="number" class="form-control" id="userAge" name="userAge" placeholder="25">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </main>
</body>
</html>