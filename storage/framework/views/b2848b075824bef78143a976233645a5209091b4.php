<?php $__env->startSection('content'); ?>
	<div class="col-md-offset-3 col-md-6">
		<h3>Create New Sales Invoice</h3>
		<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<form action="/si/" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="customer_id" class="control-label">Customer: </label>
				<select name="customer_id" class="form-control">
					<?php foreach($customers as $customer): ?>
					<option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?> (Customer ID: <?php echo e($customer->id); ?>)</option>
					<?php endforeach; ?>
				</select>
			</div>
			<?php if(!$vehicle): ?>
			<div class="form-group">
				<label for="chassis_number" class="control-label">Vehicle Chassis Number:</label>
				<input name="chassis_number" type="text" class="form-control">
			</div>
			<?php else: ?>
				<input type="hidden" name="chassis_number" value="<?php echo e($vehicle->chassis_number); ?>">
			<?php endif; ?>
			<div class="row">
				
				<div class="form-group col-md-6">
					<label for="price" class="control-label">Price:</label>
					<input name="price" type="text" class="form-control input-sm">
				</div>
				<div class="form-group col-md-6">
					<label for="deposit" class="control-label">Deposit:</label>
					<input name="deposit" type="text" class="form-control input-sm">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label for="purchase_method" class="control-label">Purchase Method</label><br>
					<div class="radio-inline">
						<label><input type="radio" name="purchase_method" value="Lease">Lease</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="purchase_method" value="Cash" checked>Cash</label>
					</div>
				</div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-primary pull-right">Create Sales Invoice</button>
				</div>
			</div>
		</form>
		<br>

		<!-- Vehicle Details -->
		<?php if($vehicle): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				Vehicle Details
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tr><td>Chassis Number</td><td><?php echo e($vehicle->chassis_number); ?></td>
					<td>Make</td><td><?php echo e($vehicle->manufacturer); ?></td></tr>
					<tr><td>Model</td><td><?php echo e($vehicle->model); ?></td>
					<td>Year</td><td><?php echo e($vehicle->year); ?></td></tr>
					<tr><td>Engine Number</td><td><?php echo e($vehicle->engine_number); ?></td>
					<td>Color</td><td><?php echo e($vehicle->primary_color); ?></td></tr>
					<tr><td>Milage</td><td><?php echo e($vehicle->milage); ?></td>
					<td>Body Type</td><td><?php echo e($vehicle->body_type); ?></td></tr>
					<tr><td>Fuel Type</td><td><?php echo e($vehicle->fuel_type); ?></td>
					<td>Engine Capacity</td><td><?php echo e($vehicle->engine_capacity); ?></td></tr>
				</table>
			</div>
		</div>
		<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>