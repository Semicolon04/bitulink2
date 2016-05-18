<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
		<h1>Returns</h1>
		<a class="btn btn-default pull-right" href="/returns/new">New</a>
		<br><br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Return Number</th>
					<th>Invoice Number</th>
					<th>Customer</th>
					<th>Date</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			
			<?php foreach($returns as $return): ?>
				<tr>
					<td><?php echo e($return->id); ?></td>
					<td><?php echo e($return->sales_invoice_id); ?></td>
					<td><?php echo e($return->customer->name); ?></td>
					<td><?php echo e($return->created_at->format('d-m-Y')); ?></td>
					<td><a href="/returns/<?php echo e($return->id); ?>">Details</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>