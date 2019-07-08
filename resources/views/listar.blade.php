@extends('dashboard')

@section('content')
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
		                      	@foreach($clients as $client)
		                      	
		                        <tr>
		                        	<td>{{ $client->id }}</td>
		                        	<td>{{ $client->name }}</td>
		                        	<td>{{ $client->cpf }}</td>
		                        	<td>{{ $client->email }}</td>
		                        	<td>{{ $client->phone }}</td>
		                        	<td>
			                        	<a class="btn btn-sm btn-warning" href="{{ url('/clients/edit?id={$client}') }}">Editar</a>
						                <a class="btn btn-sm btn-danger" href="{{ url('/clients/delete?id={$client->id}') }}">Excluir</a>
					            	</td>
		                        </tr>

	                        	@endforeach
	                      	</tbody>
	                    </table>
	                    	{{ $clients->links() }}
	                </div>
	            </div>
	        </div>
        </div>
    </div>
</div>


	@endsection