<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
	<h1><?php echo e($item->manufacturer . ' ' . $item->model); ?></h1>

	<!-- The table showing details -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				Vehicle Details
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Type</td><td><?php echo e($item->type); ?></td>
				<td>Chassis Number</td><td><?php echo e($item->chassis_number); ?></td></tr>
				<tr><td>Manufacturer's Part</td><td><?php echo e($item->manufacturers_part); ?></td>
				<td>Year</td><td><?php echo e($item->year); ?></td></tr>
				<tr><td>Manufacturer</td><td><?php echo e($item->manufacturer); ?></td>
				<td>Model</td><td><?php echo e($item->model); ?></td></tr>
				<tr><td>Body Type</td><td><?php echo e($item->body_type); ?></td>
				<td>Primary Color</td><td><?php echo e($item->primary_color); ?></td></tr>
				<tr><td>Engine Number</td><td><?php echo e($item->engine_number); ?></td>
				<td>Milage</td><td><?php echo e($item->milage); ?></td></tr>
				<tr><td>Transmission</td><td><?php echo e($item->transmission); ?></td>
				<td>Engine Capacity</td><td><?php echo e($item->engine_capacity); ?></td></tr>
				<tr><td>Cylinders</td><td><?php echo e($item->cylinders); ?></td>
				<td>Fuel Type</td><td><?php echo e($item->fuel_type); ?></td></tr>
				<tr><td>Purchase Cost</td><td><?php echo e($item->purchase_cost); ?></td>
				<td>Sales Price</td><td><?php echo e($item->sales_price); ?></td></tr>
			</table>
		</div>
	</div>
	<!-- Delete and Edit buttons -->
	<a class="btn btn-primary" href="/si/new/<?php echo e($item->chassis_number); ?>">Add to Sales Invoice</a>
	<div class="pull-right">
	<a href="/inventory/<?php echo e($item->id); ?>/edit" class="btn btn-primary">Edit Details</a>
		<form action="/inventory/<?php echo e($item->id); ?>" method="post" style="display: inline-block">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

			<button type="submit" class="btn btn-danger">Delete Customer</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>