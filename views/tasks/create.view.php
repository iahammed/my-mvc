<?php require 'views/layout/header.view.php'; ?>

<h1>Create new task</h1>
<form action="/task/store" method="POST">
  	<div class="form-group">
    	<!-- <label for="">New task</label> -->
    	<input 	type="text" name="description" class="form-control" 
    			placeholder="Enter a new task">
  	</div>
  	<button type="submit" class="btn btn-primary">Create new task</button>
</form>

<?php require 'views/layout/footer.view.php'; ?>
