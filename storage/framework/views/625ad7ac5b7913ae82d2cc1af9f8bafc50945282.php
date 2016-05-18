<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h2>Performa Invoices List</h2>
		<a class="btn btn-default pull-right" href="/pi/new">New</a>
		<br><br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Invoice Number</th>
					<th>Date</th>
					<th>Supplier</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($pis as $pi): ?>
				<tr>
					<td><?php echo e($pi->id); ?></td>
					<td><?php echo e($pi->created_at->format('d-m-Y')); ?></td>
					<td><?php echo e($pi->supplier->name); ?></td>
					<td><a href="/pi/<?php echo e($pi->id); ?>">View</a></td>
					<td><a href="/pi/edit/<?php echo e($pi->id); ?>">Edit</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>