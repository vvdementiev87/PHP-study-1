<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
        }
        #username {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        #password {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <div class="row">
        <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <h3>Авторизация</h3>
            <div class="alert alert-danger <?=$error === null ? 'visually-hidden' : ''?>">
                <?=$error?>
            </div>
            <label for="username" class="visually-hidden">Login</label>
            <input type="text" id="username" name="username" class="form-control mt-3" placeholder="Login" required="" autofocus="">
            <label for="name" class="visually-hidden">Имя пользователя</label>
            <input type="text" id="name" name="name" class="form-control mt-3" placeholder="Имя пользователя" required="" autofocus="">
            <label for="password1" class="visually-hidden">Пароль</label>
            <input type="password1" id="password1" name="password1" class="form-control" placeholder="Пароль" required="">
            <label for="password2" class="visually-hidden">Пароль</label>
            <input type="password2" id="password2" name="password2" class="form-control" placeholder="Пароль" required="">
            <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Войти</button>
            <div class="mt-3">
                <a href="/">Назад</a>
            </div>
        </form>
    </div>
</div>
</body>