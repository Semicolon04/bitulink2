<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h1>Inventory</h1>
		<a class="btn btn-default pull-right" href="/inventory/new">Add Vehicle</a>
		<br><br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Manufacturer</th>
					<th>Model</th>
					<th>Sales Price</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($items as $item): ?>
				<tr>
					<td><?php echo e($item->manufacturer); ?></td>
					<td><?php echo e($item->model); ?></td>
					<td><?php echo e($item->sales_price); ?></td>
					<td><a href="/inventory/<?php echo e($item->id); ?>">Details</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>