<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
        crossorigin="anonymous">

        <title>Bad Words PHP</title>
    </head>

    <body>

        <div class="container my-5">
            <form action="./atterraggio.php" method="GET">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Parola da censurare</label>
                    <input type="text" name="badword" class="form-control" id="exampleFormControlInput1" placeholder="Scrivi qui">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Testo</label>
                    <textarea class="form-control" name="paragraph" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Ivia</button>
                </div>
            </form>
        </div>
    </body>


</html>