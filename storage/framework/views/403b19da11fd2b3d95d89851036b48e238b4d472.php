<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h3>Choose Supplier</h3>
		<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<form action="/pi/" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="supplier_id">Supplier: </label>
				<select name="supplier_id" class="form-control">
					<?php foreach($suppliers as $supplier): ?>
					<option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Choose</button>
		</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>