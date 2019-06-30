<?php $__env->startSection('content'); ?>
<div class="card">
		<div class="card-header">
			<label>
				Listar clientes
			</label>
		</div>
		<div class="container">
			<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<label><?php echo e($client->name); ?></label>
				<label><?php echo e($client->email); ?></label>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>


	<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cancha\resources\views/listar.blade.php ENDPATH**/ ?>