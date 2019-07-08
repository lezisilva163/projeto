@extends('dashboard')

@section('content')
<div class="card">
	<div class="container">
		<div class="card card-plain">
			<div class="col-md-12">
				<div class="card-header card-header-success">
		            <h4 class="card-title mt-0">Atualizar cliente</h4>
		        </div>
				<form class="form-horizontal" action="{{ url('/clients/update/{$client->id}') }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
				    	<label class="col-sm-2 control-label"></label>
				    	<div class="col-sm-10">
							<div class="input-group date" >
				    			<input type="text" name="name" class="form-control" placeholder="Nome completo">
				    		</div>
				    	</div>
				 	</div>
				 	<div class="form-group">
				    	<label class="col-sm-2 control-label"></label>
				    	<div class="col-sm-10">
							<div class="input-group date" >
				    			<input type="text" name="cpf" class="form-control" placeholder="CPF">
				    		</div>
				    	</div>
				 	</div>
				 	<div class="form-group">
				    	<label></label>
				    	<div class="col-sm-10">
							<div class="input-group date" >
				    			<input type="email" name="email" class="form-control" placeholder="E-mail">
				    		</div>
				    	</div>
				 	</div>
				 	<div class="form-group">
			          	<label for="inputFone" class="control-label"></label>
			        <div class="col-sm-10">
						<div class="input-group date" >
			          		<input type="phone" name="phone" class="form-control" placeholder="Telefone">
			          	</div>
			        </div>
			        <div class="help-block with-errors"></div>
			        </div>
					<div class="card-footer">
						<button class="btn btn-sm btn-success" type="submit">Atualizar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


	@endsection