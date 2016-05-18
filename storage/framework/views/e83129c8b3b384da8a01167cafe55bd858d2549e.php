<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h1>Add New Supplier</h1>
		<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<form action="/suppliers/" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="name">Name: </label>
				<input name="name" type="text" class="form-control" value="<?php echo e(old('name')); ?>">
			</div>
			<div class="form-group">
				<label for="address">Address: </label>
				<textarea name="address" type="text" class="form-control" value="<?php echo e(old('address')); ?>"></textarea>
			</div>
			<div class="form-group">
				<label for="telephone">Telephone: </label>
				<input name="telephone" type="text" class="form-control" value="<?php echo e(old('telephone')); ?>">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input name="email" type="text" class="form-control"  value="<?php echo e(old('email')); ?>">
			</div>

			<div class="form-group">
				<label for="website">Website: </label>
				<input name="website" type="text" class="form-control" value="<?php echo e(old('website')); ?>">
			</div>
			<button type="submit" class="btn btn-primary">Add Supplier</button>
		</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>