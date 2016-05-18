<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h2>Purchase Orders List</h2>
		<a class="btn btn-default pull-right" href="/po/new">New</a>
		<br><br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Order Number</th>
					<th>Invoice Number</th>
					<th>Date</th>
					<th>Supplier</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<?php foreach($pos as $po): ?>
				<tr>
					<td><?php echo e($po->id); ?></td>
					<td><?php echo e($po->performa_invoice->id); ?></td>
					<td><?php echo e($po->created_at->format('d-m-Y')); ?></td>
					<td><?php echo e($po->supplier->name); ?></td>
					<td><a href="/po/<?php echo e($po->id); ?>">View</a></td>
					<td><a href="/po/edit/<?php echo e($po->id); ?>">Edit</a></td>
				</tr>
			<?php endforeach; ?>
		</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>