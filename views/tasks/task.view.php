<?php require 'views/layout/header.view.php'; ?>
<h1>List of tasks</h1>
<ul>
	<?php foreach($tasks as $task) : ?>
		<li>
			<?php if($task->completed) : ?>
				<strike> <?= $task->description ; ?></strike>
			<?php else: ?>
				<?= $task->description ; ?>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
</ul>
<hr>
<a class="btn btn-success" href="/task/create">Create new task</a>
<?php require 'views/layout/footer.view.php'; ?>
