<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <form action="form.php" method="POST">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Parola da censurare</label>
                    <input type="text" class="form-control" name="wordToEliminate" id="exampleFormControlInput1" placeholder="...">
                 </div>
                  <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Testo da censurare</label>
                     <textarea class="form-control" name="textToCensure" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button class="btn btn-primary" >Risultato</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>