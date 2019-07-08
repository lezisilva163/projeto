<?php $__env->startSection('content'); ?>
<div class="card">
	<div class="container">
		<div class="card card-plain">
			<div class="col-md-12">
	            <div class="card-header card-header-success">
	                <h4 class="card-title mt-0">Lista de clientes</h4>
	            </div>
	            <div class="card-body">
	             	<div class="table-responsive">
	                    <table class="table table-hover">
	                      	<thead class="">
	                      		<th>ID</th>
		                        <th>Nome</th>
		                        <th>CPF</th>
		                        <th>E-mail</th>
		                        <th>Telefone</th>
	                      	</thead>
	                      	<tbody>
		                      	<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                      	
		                        <tr>
		                        	<td><?php echo e($client->id); ?></td>
		                        	<td><?php echo e($client->name); ?></td>
		                        	<td><?php echo e($client->cpf); ?></td>
		                        	<td><?php echo e($client->email); ?></td>
		                        	<td><?php echo e($client->phone); ?></td>
		                        	<td>
			                        	<a class="btn btn-sm btn-warning" href="<?php echo e(url('/clients/edit?id={$client}')); ?>">Editar</a>
						                <a class="btn btn-sm btn-danger" href="<?php echo e(url('/clients/delete?id={$client->id}')); ?>">Excluir</a>
					            	</td>
		                        </tr>

	                        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                      	</tbody>
	                    </table>
	                    	<?php echo e($clients->links()); ?>

	                </div>
	            </div>
	        </div>
        </div>
    </div>
</div>


	<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cancha\resources\views/listar.blade.php ENDPATH**/ ?>