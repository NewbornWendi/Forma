<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица с csv</title>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Playfair+Display|Ubuntu:300" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container card border-success  bg-dark  text-white p-5">
        <?    require_once "functions.php";?>
        <table class="table table-hover table-dark table-border">
            <tr>
                <th scope="row">Имя:</th>
                <th scope="row">Телефон:</th>
                <th scope="row">Email:</th>
                <th scope="row">Хобби:</th>
                <th scope="row">Жанры:</th>
            </tr>
            <tr><?=tableCsv(); ?></tr>
        </table>
        <div class="row mt-2 text-center ">
            <div class="col-12">
                <button type="button" onclick="history.back(-2); return false;" name="csv" id="csv"
                    class="btn btn-primary">Назад</button>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>