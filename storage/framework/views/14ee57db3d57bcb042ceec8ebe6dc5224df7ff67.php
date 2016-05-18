<?php $__env->startSection('content'); ?>
<div class="col-md-offset-3 col-md-6">
		<h1>Suppliers List</h1>
		<a class="btn btn-default pull-right" href="/suppliers/new">New</a><br><br><br>
		<input type="text" id="searchbox" class="form-control" placeholder="Search"><br>
		
		<ul class="list-group">
		<?php foreach($suppliers as $supplier): ?>
			<li class="list-group-item supplier-view">
				<span class="supplier-name"><?php echo e($supplier->name); ?></span>
				<a class="pull-right" href="/suppliers/<?php echo e($supplier->id); ?>">Details</a>
			</li>
		<?php endforeach; ?>
		</ul>
</div>
<script>
$(document).ready(function(){
	$('#searchbox').keyup(function() {
		var filter = $(this).val();

		$('.supplier-name').each(function() {
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