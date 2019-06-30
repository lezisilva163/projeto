@extends('dashboard')

@section('content')
	<div class="card">
		<div class="card-header">
			<label>
				Agendar horário
			</label>
		</div>
		<div class="container">
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
		</div>

		<div class="card-footer">
			<button class="btn btn-sm btn-success" type="submit">Agendar</button>
		</div>
	</div>
	






	@endsection