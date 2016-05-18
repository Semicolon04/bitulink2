<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
	<h1>User Details</h1>

	<!-- The table showing details -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				<?php echo e($user->username); ?>

			</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Username</td><td><?php echo e($user->username); ?></td></tr>
				<tr><td>Password</td><td><?php echo e($user->password); ?></td></tr>
				<tr><td>Type</td><td><?php echo e($user->type); ?></td></tr>
			</table>
		</div>
	</div>
	<!-- Delete and Edit buttons -->
	<div class="pull-right">
	<a href="/users/<?php echo e($user->id); ?>/edit" class="btn btn-primary">Edit</a>
		<form action="/users/<?php echo e($user->id); ?>" method="post" style="display: inline-block">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

			<button type="submit" class="btn btn-danger">Delete</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>