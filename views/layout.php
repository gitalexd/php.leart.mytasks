<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>

<?
if (!empty($message)) { ?>
    <div class="alert alert-success" role="alert">
        <?= $message ?>
    </div>
<? } ?>

<? if (!empty($errorMessage)) { ?>
    <div class="alert alert-danger" role="alert">
        <?= $errorMessage ?>
    </div>
<? } ?>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">MyTasks</a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav">

            </ul>
            <ul class="navbar-nav ml-md-auto">

                <li class="nav-item ">
                    <a class="nav-link" href="/task/create">Создать новую задачу</a>
                </li>

                <? if (isAuth()) { ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="/logout">Выход из профиля админа</a>
                    </li>
                <? } else { ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="/login">Вход</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/registration">Регистрация</a>
                    </li>
                <? } ?>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <?= $page ?>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/brands.min.js"></script>
</body>
</html>