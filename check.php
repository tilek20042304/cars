<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Регистратция </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h3> Регистратция </h3>
    <form action="blocks/sinup.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой  логин " class="form-control">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль " class="form-control">
        <button type="submit" name="button" class="btn btn-success">Отправить</button>
</div>
</form>

</body>
</html>