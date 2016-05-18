<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
	<?php if($edit): ?>
	<h3>Edit Inventory Item</h3>
	<?php else: ?>
	<h3>New Inventory Item</h3>
	<?php endif; ?>

	<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="panel panel-default">
		<!-- <div class="panel-heading">Enter Details</div> -->
		<div class="panel-body">
			<?php if($edit): ?>
			<form method="post" action="/inventory/<?php echo e($item->id); ?>">
				<?php echo e(method_field('PATCH')); ?>

			<?php else: ?>
			<form method="post" action="/inventory">
			<?php endif; ?>
				<?php echo e(csrf_field()); ?>


				<!-- A row of three input fields -->
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="type" class="control_label">Type:</label>
							<input name="type" type="text" class="form-control input-sm"
								<?php if($edit): ?>value="<?php echo e($item->type); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="chassis_number" class="control_label">Chassis Number:</label>
							<input name="chassis_number" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->chassis_number); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="manufacturers_part" class="control_label">Manufacturer's Part:</label>
							<input name="manufacturers_part" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->manufacturers_part); ?>"<?php endif; ?>>
						</div>
					</div>
				</div>

				<!-- A row of three input fields -->
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="year" class="control_label">Year:</label>
							<input name="year" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->year); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="manufacturer" class="control_label">Manufacturer:</label>
							<input name="manufacturer" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->manufacturer); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="model" class="control_label">Model:</label>
							<input name="model" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->model); ?>"<?php endif; ?>>
						</div>
					</div>
				</div>

				<!-- A row of three input fields -->
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="body_type" class="control_label">Body Type:</label>
							<input name="body_type" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->body_type); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="primary_color" class="control_label">Primary Color:</label>
							<input name="primary_color" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->primary_color); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="engine_number" class="control_label">Engine Number:</label>
							<input name="engine_number" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->engine_number); ?>"<?php endif; ?>>
						</div>
					</div>
				</div>

				<!-- A row of three input fields -->
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="milage" class="control_label">Milage:</label>
							<input name="milage" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->milage); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="transmission" class="control_label">Transmission:</label>
							<input name="transmission" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->transmission); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="engine_capacity" class="control_label">Engine Capacity:</label>
							<input name="engine_capacity" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->engine_capacity); ?>"<?php endif; ?>>
						</div>
					</div>
				</div>

				<!-- A row of two four fields -->
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="cylinders" class="control_label">Cylinders:</label>
							<input name="cylinders" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->cylinders); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="fuel_type" class="control_label">Fuel Type:</label>
							<input name="fuel_type" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->fuel_type); ?>"<?php endif; ?>>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="purchase_cost" class="control_label">Purchase Cost:</label>
							<input name="purchase_cost" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->purchase_cost); ?>"<?php endif; ?>>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="form-group">
							<label for="sales_price" class="control_label">Sales Price:</label>
							<input name="sales_price" type="text" class="form-control input-sm"
							<?php if($edit): ?>value="<?php echo e($item->sales_price); ?>"<?php endif; ?>>
						</div>
					</div>
				</div>

				<button type="submit" class="btn btn-primary">
					<?php if($edit): ?>
					Update Details
					<?php else: ?>
					Add Item
					<?php endif; ?>
				</button>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>