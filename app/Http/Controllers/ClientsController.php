<?php
namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
    	return view('cadastrar');
    }
    
    public function edit(Request $request){
      dd($request->all());
      return view('editar');
    }

    public function store(Request $request){
      try {
        Client::firstOrCreate([
          'name'  => $request->name,
          'email' => $request->email,
          'cpf'   => $request->cpf,
          'phone' => $request->phone
        ]);
        return redirect('/clients');
      } catch(\Exception $e) {
        dd($e->getMessage());
      }
    }

    public function show() {
      $clients = Client::paginate(15);

      return view('listar', compact('clients'));
    }
    public function update(Request $request){
      try {
        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();
        return redirect()->route('listar')->with('Message', 'Cliente alterado com sucesso');
      } catch (Exception $e) {
        dd($e->getMessage());
      }
    }

    public function destroy(Request $request)
    {
        $client = Client::findOrFail($request->id);
        $client->delete();
        return redirect('/clients')->with('alert-success','Product hasbeen deleted!');
    }
}
