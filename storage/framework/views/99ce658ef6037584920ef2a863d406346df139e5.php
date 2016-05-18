<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
		<h1>Inventory</h1>
		<a class="btn btn-default pull-right" href="/inventory/new">Add Vehicle</a>
		<br><br><br><br>
		<div class="row">
			<div class="col-md-6">
			<input type="text" id="cn-search" class="form-control" placeholder="Find by Chassis Number">
			</div>
			<div class="col-md-6">
			<input type="text" id="model-search" class="form-control" placeholder="Search for Model">
			</div>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Chassis Number</th>
					<th>Model</th>
					<th>Sales Price</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($items as $item): ?>
				<tr>
					<td class="cn"><?php echo e($item->chassis_number); ?></td>
					<td class="model"><?php echo e($item->manufacturer); ?> <?php echo e($item->model); ?></td>
					<td><?php echo e($item->sales_price); ?></td>
					<td><a href="/inventory/<?php echo e($item->id); ?>">Details</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
</div>
<script>
$(document).ready(function(){
	$('#cn-search').keyup(function() {
		var filter = $(this).val();

		$('.cn').each(function() {
			if ($(this).text().search(new RegExp(filter, 'i')) < 0) {
				$(this).parent().fadeOut();
			} else {
				$(this).parent().fadeIn();
			}
		});
	});
	$('#model-search').keyup(function() {
		var filter = $(this).val();

		$('.model ').each(function() {
			if ($(this).text().search(new RegExp(filter, 'i')) < 0) {
				$(this).parent().fadeOut();
			} else {
				$(this).parent().fadeIn();
			}
		});
	});
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>