<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        $usuarios = User::get();
        return view('paginas.usuarios',[
            'usuarios' => $usuarios
        ]);
    }

    public function create()
    {
        return view('paginas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarioEditado = $request->only('name','email','password');
        User::create($usuarioEditado); 
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //COM GET PRECISA DO FOREACH NA VIEW
       // $usuario = User::where('id',$id)->get();
        $usuario = User::find($id);
        return view('paginas.usuario',[
            'usuario' => $usuario
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('paginas.editar',[
            'usuario'=>$usuario
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuarioEditado = $request->only('name','email');
        $user = User::find($id);

        $user->update($usuarioEditado);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $user = User::find($id);

       $user->delete();
       return redirect('/');
    }
}
