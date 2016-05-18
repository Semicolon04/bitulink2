<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
		<h1>Sales Invoices</h1>
		<a class="btn btn-default pull-right" href="/si/new">New</a>
		<br><br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Invoice Number</th>
					<th>Date</th>
					<th>Customer</th>
					<th>Vehicle</th>
					<th>Selling Price</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($sis as $si): ?>
				<tr>
					<td><?php echo e($si->id); ?></td>
					<td><?php echo e($si->created_at->format('d-m-Y')); ?></td>
					<td><?php echo e($si->customer->name); ?></td>
					<td><?php echo e($si->make); ?> <?php echo e($si->model); ?></td>
					<td><?php echo e($si->price); ?></td>
					<td><a href="/si/<?php echo e($si->id); ?>">Details</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>