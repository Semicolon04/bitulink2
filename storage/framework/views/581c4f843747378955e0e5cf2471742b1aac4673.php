<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
	<h1>Voucher Details</h1>

	<!-- The table showing details -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				Voucher #<?php echo e($voucher->id); ?>

			</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Vendor</td><td><?php echo e($voucher->vendor); ?></td></tr>
				<tr><td>Description</td><td><?php echo e($voucher->description); ?></td></tr>
				<tr><td>Amount</td><td><?php echo e($voucher->amount); ?></td></tr>
				<tr><td>Payment Type</td><td><?php echo e($voucher->payment_type); ?></td></tr>
			</table>
		</div>
	</div>
	<!-- Delete and Edit buttons -->
	<div class="pull-right">
	<a href="/vouchers/<?php echo e($voucher->id); ?>/edit" class="btn btn-primary">Edit Details</a>
		<form action="/vouchers/<?php echo e($voucher->id); ?>" method="post" style="display: inline-block">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

			<button type="submit" class="btn btn-danger">Delete Voucher</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>