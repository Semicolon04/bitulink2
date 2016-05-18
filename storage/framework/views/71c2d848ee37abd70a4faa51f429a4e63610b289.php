<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
	<h1>Customer Details</h1>

	<!-- The table showing details -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				<?php echo e($customer->name); ?>

			</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Name</td><td><?php echo e($customer->name); ?></td></tr>
				<tr><td>Address</td><td><?php echo e($customer->address); ?></td></tr>
				<tr><td>Telephone</td><td><?php echo e($customer->telephone); ?></td></tr>
				<tr><td>Email</td><td><?php echo e($customer->email); ?></td></tr>
			</table>
		</div>
	</div>
	<!-- Delete and Edit buttons -->

	<a href="/customers/<?php echo e($customer->id); ?>/invoices" class="btn btn-primary">View Invoices</a>
	<a href="/customers/<?php echo e($customer->id); ?>/receipts" class="btn btn-primary">View Receipts</a>
	<a href="/customers/<?php echo e($customer->id); ?>/returns" class="btn btn-primary">View Returns</a>

	<div class="pull-right">
	<a href="/customers/<?php echo e($customer->id); ?>/edit" class="btn btn-primary">Edit Details</a>
		<form action="/customers/<?php echo e($customer->id); ?>" method="post" style="display: inline-block">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

			<button type="submit" class="btn btn-danger">Delete Customer</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>