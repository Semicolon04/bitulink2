<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
	<h1>Sales Invoice #<?php echo e($si->id); ?></h1>

	<!-- Details (Date and Cusotmer) -->
	<div class="panel panel-default">
		<div class="panel-heading">Details</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Date</td><td><?php echo e($si->created_at->format('d-m-Y')); ?></td></tr>
				<tr><td>Customer</td><td> <?php echo e($si->customer->name); ?></td></tr>
				<tr><td>Customer's Telephone</td><td><?php echo e($si->customer->telephone); ?></td></tr>
			</table>
			<div class="pull-right"><a href="/customers/<?php echo e($si->customer_id); ?>" class="btn btn-primary">View Customer</a></div>
		</div>
	</div>

	<!-- Payment Details -->
	<div class="panel panel-default">
		<div class="panel-heading">Payment Details</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Price</td><td><?php echo e($si->price); ?></td></tr>
				<tr><td>Purchase Method</td><td> <?php echo e($si->purchase_method); ?></td></tr>
				<tr><td>Deposit</td><td><?php echo e($si->deposit); ?></td></tr>
				<tr><td>Receipts Total</td><td><?php echo e($receipt_total); ?></td>
				<tr><td>Total Due</td><td><?php echo e($si->price - $si->deposit - $receipt_total); ?></td>
			</table>
		</div>
	</div>
	<!-- The table showing vehicle details -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				Vehicle Details
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Chassis Number</td><td><?php echo e($si->chassis_number); ?></td></tr>
				<tr><td>Make</td><td><?php echo e($si->make); ?></td></tr>
				<tr><td>Model</td><td><?php echo e($si->model); ?></td></tr>
				<tr><td>Year</td><td><?php echo e($si->year); ?></td></tr>
				<tr><td>Engine Number</td><td><?php echo e($si->engine_number); ?></td></tr>
				<tr><td>Color</td><td><?php echo e($si->color); ?></td></tr>
				<tr><td>Milage</td><td><?php echo e($si->milage); ?></td></tr>
				<tr><td>Body Type</td><td><?php echo e($si->body_type); ?></td></tr>
				<tr><td>Fuel Type</td><td><?php echo e($si->fuel_type); ?></td></tr>
				<tr><td>Engine Capacity</td><td><?php echo e($si->engine_capacity); ?></td></tr>
				<tr><td>Transmission</td><td><?php echo e($si->transmission); ?></td></tr>
				
				
			</table>
			
		</div>
	</div>
	<!-- Delete and Edit buttons -->
	<div class="pull-right">
	<a class="btn btn-primary" href="/receipts/new/<?php echo e($si->id); ?>">Create Receipt</a>
	<a class="btn btn-primary" href="/returns/new/<?php echo e($si->id); ?>">Create Return</a>
	<a class="btn btn-primary" href="/si/<?php echo e($si->id); ?>/receipts">View Receipts</a>
	<a class="btn btn-primary" href="/si/<?php echo e($si->id); ?>/returns">View Returns</a>
	<br><br>
	
	</div>
	<div class="pull-right">
		<a href="/si/<?php echo e($si->id); ?>/edit" class="btn btn-primary">Edit Details</a>
		<form action="/si/<?php echo e($si->id); ?>" method="post" style="display: inline-block">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

			<button type="submit" class="btn btn-danger">Delete Invoice</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>