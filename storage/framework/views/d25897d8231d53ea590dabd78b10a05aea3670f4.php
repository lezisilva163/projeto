<?php $__env->startSection('content'); ?>
<div class="card">
	<div class="container">
		<div class="card card-plain">
			<div class="col-md-12">
				<div class="card-header card-header-success">
		            <h4 class="card-title mt-0">Agendar Horário</h4>
		        </div>
				<form class="form-horizontal" action="" method="POST">
					<div class="form-group">
						<label class="col-sm-2 control-label">Data</label>
						<div class="col-sm-10">
							<div class="input-group date" >
							    <input type="text" class="form-control" id="datepicker">
							    <div class="input-group-addon">
							        <span class="glyphicon glyphicon-th"></span>
							    </div>
							</div>
						</div>
					</div>
				</form>
				<div class="card-footer">
					<button class="btn btn-sm btn-success" type="submit">Agendar</button>
				</div>
			</div>
		</div>
	</div>
</div>
	






	<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cancha\resources\views/index.blade.php ENDPATH**/ ?>