<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h1>Add New Customer</h1>
		<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<form action="/customers/" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="name">Name: </label>
				<input name="name" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="address">Address: </label>
				<textarea name="address" type="text" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="telephone">Telephone: </label>
				<input name="telephone" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input name="email" type="text" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Add Customer</button>
		</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>