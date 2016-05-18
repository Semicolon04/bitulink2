<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h1>Add New User</h1>
		<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<form action="/users/" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="username">Username: </label>
				<input name="username" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input name="password" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="type">Type: </label>
				<select name="type" class="form-control">
					<option value="manager">Manager</option>
					<option value="accountant">Accountant</option>
					<option value="salesperson">Salesperson</option>
					<option value="stockkeeper">Stock keeper</option>
					<option value="admin">System Administrator</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Add User</button>
		</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>