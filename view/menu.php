<a href="/">Главная</a>
<?php if ($username == null) : ?>
    <a href="/?controller=security">Войти</a>
    <a href="/?controller=registration">Зарегистироваться</a>
<?php else : ?>
<a href="/?controller=second">Вторая</a>
<a href="/?controller=tasks">Задачи</a>
<a href="/?controller=guest">Гостевая</a>
<a href="/?controller=security&action=logout">Выйти</a>
<?php endif; ?>
<br>
<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?>. </p>
<?php endif; ?><br>