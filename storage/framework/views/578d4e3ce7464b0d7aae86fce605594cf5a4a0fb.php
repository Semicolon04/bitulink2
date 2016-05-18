<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
		<h1>Receipts</h1>
		<a class="btn btn-default pull-right" href="/receipts/new">New</a>
		<br><br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Receipt Number</th>
					<th>Invoice Number</th>
					<th>Customer</th>
					<th>Date</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			
			<?php foreach($receipts as $receipt): ?>
				<tr>
					<td><?php echo e($receipt->id); ?></td>
					<td><?php echo e($receipt->sales_invoice_id); ?></td>
					<td><?php echo e($receipt->customer->name); ?></td>
					<td><?php echo e($receipt->created_at->format('d-m-Y')); ?></td>
					<td><a href="/receipts/<?php echo e($receipt->id); ?>">Details</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>