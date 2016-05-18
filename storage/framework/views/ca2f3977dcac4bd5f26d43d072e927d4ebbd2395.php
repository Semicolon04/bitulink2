<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h1>Vouchers List</h1>
		<a class="btn btn-default pull-right" href="/vouchers/new">New</a>
		<br><br>
		<table class="table table-striped">
			<thead>
				<th>Voucher Number</th>
				<th>Date</th>
				<th>Vendor</th>
				<th></th>
			</thead>
			<tbody>
			<?php foreach($vouchers as $voucher): ?>
				<tr>
					<td>Voucher #<?php echo e($voucher->id); ?></td>
					<th><?php echo e($voucher->created_at->format('d-m-Y')); ?></th>
					<td><?php echo e($voucher->vendor); ?></td>
					<td><a class="pull-right" href="/vouchers/<?php echo e($voucher->id); ?>">Details</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>