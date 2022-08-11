<a href="/">Главная</a><br>
Задачи циклом
<h2>Список задач</h2>
<form method="post">
    <input type="description" name="description" placeholder="Добавьте задачу">
    <input type="submit" value="Добавить">
</form>
<br>
<?php if (isset($_SESSION['tasks'])): ?>
    <?php if (empty($_SESSION['tasks']->getUndoneList())): ?>
        Нет задач
    <?php else: ?>    
        <?php foreach ($_SESSION['tasks']->getUndoneList() as $key => $tasks): ?>
        * <?=$tasks->getDescription()?>  <?=$tasks->getDateCreated()->format('d.m.Y H:i:s')?> <a href="?controller=tasks&action=markDone&key=<?=$key?>">[Done]</a> <br>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>

