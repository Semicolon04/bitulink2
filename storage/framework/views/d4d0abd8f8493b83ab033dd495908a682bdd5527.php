<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
	<h1>Supplier Details</h1>

	<!-- The table showing details -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				<?php echo e($supplier->name); ?>

			</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Name</td><td><?php echo e($supplier->name); ?></td></tr>
				<tr><td>Address</td><td><?php echo e($supplier->address); ?></td></tr>
				<tr><td>Telephone</td><td><?php echo e($supplier->telephone); ?></td></tr>
				<tr><td>Email</td><td><?php echo e($supplier->email); ?></td></tr>
				<tr><td>Website</td><td><?php echo e($supplier->website); ?></td></tr>
			</table>
		</div>
	</div>
	<!-- Delete and Edit buttons -->
	<a href="/suppliers/<?php echo e($supplier->id); ?>/invoices" class="btn btn-primary">View Invoices</a>
	<a href="/suppliers/<?php echo e($supplier->id); ?>/orders" class="btn btn-primary">View Orders</a>

	<div class="pull-right">
		<a href="/suppliers/<?php echo e($supplier->id); ?>/edit" class="btn btn-primary">Edit Details</a>
		<form action="/suppliers/<?php echo e($supplier->id); ?>" method="post" style="display: inline-block">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

			<button type="submit" class="btn btn-danger">Delete Supplier</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>