<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h1>All Users</h1>
		<a class="btn btn-default pull-right" href="/users/new">New</a>
		<br><br>
		<ul class="list-group">
		<?php foreach($users as $user): ?>
			<li class="list-group-item">
				<?php echo e($user->username); ?>

				<a class="pull-right" href="/users/<?php echo e($user->id); ?>">Details</a>
			</li>
		<?php endforeach; ?>
		</ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>