<?php
namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
    	return view('cadastrar');
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
}
