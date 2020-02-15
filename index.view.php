<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Playfair+Display|Ubuntu:300" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container w-50">
        <form action=" " method="POST" class="card border-success  bg-dark  text-white p-5">

            <!-- инпуты-->
            <div class="form-group">
                <label for="exampleFormControlInput1">Имя</label>
                <input type="name" name="name" value="<?= $name ?>" class="form-control" id="exampleFormControlInput1"
                    placeholder="Пётр"> <?= "$name1";?>
            </div>
            <div class="form-group">
                <label for="telephone">Телефон</label>
                <input type="text" name="telephone" value="<?= $telephone ?>" class="form-control" id="telephone"
                    placeholder="(+7) 908 003 38 47"> <?= "$telephone1";?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Email address</label>
                <input type="email" name="email" value="<?= $email ?>" class="form-control"
                    id="exampleFormControlInput3" placeholder="name@example.com"> <?= "$email1";?>
            </div>
            <!-- инпуты-->


            <!-- комбобоксы -->
            <div class="form-group">
                <label for="exampleFormControlSelect2">Хобби</label>
                <select multiple class="form-control" name="combobox[]" id="exampleFormControlSelect2">
                    <?php foreach ($list as $item) : ?>
                    <option value="<?= $item ?>" <?= in_array($item, $combobox) ? 'selected' : '' ?>>
                        <?= $item ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- комбобоксы -->


            <!-- чекбоксы-->
            <span>Жанры</span><br>
            <div class="form-check">
                <?php foreach ($game as $item) : ?>
                <label class="form-check-label">
                    <input class="form-check-input" name="checkbox[]" type="checkbox" value="<?= $item ?>"
                        id="<?= $item ?>" <?= in_array($item, $checkbox) ? "checked" : "" ?>>
                    <?= $item ?>
                </label><br>
                <?php endforeach; ?>
            </div>
            <!-- чекбоксы-->


            <!-- кнопки-->
            <div class="row mt-2 text-center ">
                <div class="col-12">
                    <button type="submit" name="buttonOk" class="btn btn-primary">Отправить</button>
                </div>
            </div>
            <div class="row mt-2  text-center">
                <div class="col-4">
                    <button type="button" name="csv" id="csv" onclick="location.href='csv.php'"
                        class="btn btn-primary">csv</button>
                </div>
                <div class="col-4">
                    <button type="button" name="json" id="json" onclick="location.href='json.php'"
                        class="btn btn-primary">json</button>
                </div>
                <div class="col-4">
                    <button type="button" name="txt" id="txt" onclick="location.href='txt.php'"
                        class="btn btn-primary">txt</button>
                </div>
            </div>
            <!-- кнопки-->
        </form>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>