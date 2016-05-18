<!-- Performa Invoice View -->


<?php $__env->startSection('content'); ?>
<div class="col-md-12">
	<h3>Purchase Order #<?php echo e($po->id); ?></h3>

	<!-- Details Panel -->
	<div class="panel panel-default">
		<div class="panel-heading">
			Details
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
					<tr>
						<td>Date</td>
						<td><?php echo e($po->created_at->format('d-m-Y')); ?></td>
					</tr>
					<tr>
						<td>Invoice Number</td>
						<td><?php echo e($po->performa_invoice_id); ?></td>
					</tr>
					<tr>
						<td>Supplier</td>
						<td><?php echo e($po->supplier->name); ?></td>
					</tr>
					<tr>
						<td>Supplier Address</td>
						<td><?php echo e($po->supplier->address); ?></td>
					</tr>
			</table>
			<div class="pull-right">
				<a href="/suppliers/<?php echo e($po->supplier->id); ?>/" class="btn btn-primary">View Supplier</a>
				<a href="/pi/<?php echo e($po->performa_invoice->id); ?>/" class="btn btn-primary">View Invoice</a>
			</div>
		</div>
	</div>

	<!-- Table of Items -->
	<div class="panel panel-default">
		<div class="panel-heading">Items</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Type</th>
						<th>Brand</th>
						<th>Model</th>
						<th>Year</th>
						<th>Description</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Amount</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($po->items as $item): ?>
						<tr>
							<td><?php echo e($item->type); ?></td>
							<td><?php echo e($item->brand); ?></td>
							<td><?php echo e($item->model); ?></td>
							<td><?php echo e($item->year); ?></td>
							<td><?php echo e($item->description); ?></td>
							<td><?php echo e($item->quantity); ?></td>
							<td><?php echo e($item->price); ?></td>
							<td><?php echo e($item->quantity * $item->price); ?></td>
							<td>
								<form action="/po/<?php echo e($po->id); ?>/<?php echo e($item->id); ?>" method="post">
									<?php echo e(csrf_field()); ?>

									<?php echo e(method_field('delete')); ?>

									<button type="submit" class="btn btn-danger btn-xs">Remove</button>
								</form>
							</td>
						</tr>
					<?php endforeach; ?>
					<tr>
						<td></td><td></td><td></td><td></td><td></td><td></td>
						<td>Total:</td><td><?php echo e($total); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<?php if($edit): ?>
	<!-- Form to add next item -->
	<div class="panel panel-default">
		<div class="panel-heading">Add a new item</div>
		<div class="panel-body">
			<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<form action="/po/<?php echo e($po->id); ?>" method="post">
				<?php echo e(csrf_field()); ?>

				<!-- type input -->
				<div class="col-md-3">
					<div class="form-group">
						<label for="type" class="control-label">Type:</label>
						<select name="type" class="form-control input-sm">
							<option value="Car">Car</option>
							<option value="Van">Van</option>
							<option value="Other">Other</option>
						</select>
					</div>
				</div>
				<!-- brand input -->
				<div class="col-md-3">
					<div class="form-group">
						<label for="brand" class="control-label">Brand:</label>
						<input name="brand" type="text" class="form-control input-sm">
					</div>
				</div>
				<!-- model input -->
				<div class="col-md-3">
					<div class="form-group">
						<label for="model" class="control-label">Model:</label>
						<input name="model" type="text" class="form-control input-sm">
					</div>
				</div>
				<!-- year input -->
				<div class="col-md-3">
					<div class="form-group">
						<label for="year" class="control-label">Year:</label>
						<input name="year" type="text" class="form-control input-sm">
					</div>
				</div>

				<!-- descripton input -->
				<div class="col-md-6">
					<div class="form-group">
						<label for="description" class="control-label">Description</label>
						<input name="description" type="" class="form-control input-sm">
					</div>
				</div>
				<!-- quantity input -->
				<div class="col-md-3">
					<div class="form-group">
						<label for="quantity" class="control-label">Quantity:</label>
						<input name="quantity" type="" class="form-control input-sm">
					</div>
				</div>
				<!-- price input -->
				<div class="col-md-3">
					<div class="form-group">
						<label for="price" class="control-label">Price:</label>
						<input name="price" type="" class="form-control input-sm">
					</div>
				</div>
				<div class="pull-right">
					<button type="sumbmit" class="btn btn-primary">Add Item</button>
				</div>
			</form>
		</div>
	</div>
	<?php endif; ?>

	<!-- Buttons -->
	<div class="pull-right">
		<?php if(!$edit): ?>
		<a href="po/edit/<?php echo e($po->id); ?>" class="btn btn-primary">Edit Order</a>
		<?php endif; ?>
		<form action="/po/<?php echo e($po->id); ?>" method="post" style="display: inline-block">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

			<button type="submit" class="btn btn-danger">Delete Order</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>