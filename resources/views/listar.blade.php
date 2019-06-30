@extends('dashboard')

@section('content')
<div class="card">
		<div class="card-header">
			<label>
				Listar clientes
			</label>
		</div>
		<div class="container">
			@foreach($clients as $client)
				<label>{{ $client->name }}</label>
				<label>{{ $client->email }}</label>
			@endforeach
		</div>


	@endsection