<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h3>Choose Performa Invoice</h3>
		<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<form action="/po/" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="performa_invoice_id">Performa Invoice: </label>
				<select name="performa_invoice_id" class="form-control">
					<?php foreach($invoices as $invoice): ?>
					<option value="<?php echo e($invoice->id); ?>">PI #<?php echo e($invoice->id); ?> (<?php echo e($invoice->supplier->name); ?>)</option>
					<?php endforeach; ?>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Choose</button>
		</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>