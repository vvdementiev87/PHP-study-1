<a href="/">Главная</a><br>
Задачи циклом для <?=$username?>
<h2>Список задач</h2>
<form method="post">
    <input type="description" name="description" placeholder="Добавьте задачу">
    <input type="submit" value="Добавить">
</form>
<br>
<?php if (isset($tasks)): ?>
    <?php if (empty($tasks)): ?>
        Нет задач
    <?php else: ?>    
        <?php foreach ($tasks as $task): ?>            
        * <?=$task->getDescription()?> <a href="?controller=tasks&action=markDone&key=<?=$task->getTaskId()?>">[Done]</a> <br>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>

