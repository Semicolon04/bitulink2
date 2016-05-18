<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h1>Edit Supplier Details</h1>
		<form action="/suppliers/<?php echo e($supplier->id); ?>" method="post">
			<?php echo e(method_field('PATCH')); ?>

			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="name">Name: </label>
				<input name="name" type="text" class="form-control"
							 value="<?php echo e($supplier->name); ?>">
			</div>
			<div class="form-group">
				<label for="address">Address: </label>
				<textarea name="address" type="text" class="form-control"
							 value="<?php echo e($supplier->address); ?>"></textarea>
			</div>
			<div class="form-group">
				<label for="telephone">Telephone: </label>
				<input name="telephone" type="text" class="form-control"
							 value="<?php echo e($supplier->telephone); ?>">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input name="email" type="text" class="form-control"
							 value="<?php echo e($supplier->email); ?>">
			</div>
			<div class="form-group">
				<label for="website">Website: </label>
				<input name="website" type="text" class="form-control"
							 value="<?php echo e($supplier->website); ?>">
			</div>
			<button type="submit" class="btn btn-primary">Change Details</button>
		</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>