<?php

/*
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

use App\Message;

class MessagesController extends Controller
{
    public function __construct()
    {
        // Con este middleware solo permito a invitados enviar mensajes.
        $this->middleware('auth', ['except' => ['store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener datos usando PDO
        //$messages = DB::table('messages')->get();

        // Obtener datos desde el modelo
        $messages = Message::all();

        return view('messages.index', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreateMessageRequest $request)
    {

        // Guardar mensaje en la DB mediante PDO
        /*
        DB::table('messages')->insert([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'subject' => $request->input('subject'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'created_at' => Carbon::now(),contact
            'updated_at' => Carbon::now(),
        ]);
        */

        // Quitar protección y permitir cualquier asignación masiva,
        // Esto solo es útil para pruebas
        // Model::unguard();

        // Crear Mensaje con los datos recibidos que admitan asignación masiva
        Message::create($request->all());

        //Session::flash('sucess_message', $msg);
        return redirect()->route('contact')
                         ->with('sucess_message', 'Procesando formulario')
                         ->withCookie('sendmail', true, 2)  // Indica que envió un email
                         ->withCookie('sendmail_at', time(), 2);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Buscar el primer id coincidente mediante PDO
        // $msg = DB::table('messages')->where('id', $id)->first();

        // Buscar por "id" desde el modelo
        // $msg = Message::find($id);

        // Busca por "id" desde el modelo o falla con error 404 si no existe.
        $msg = Message::findOrFail($id);


        return view('messages.show', compact('msg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Buscar por id mediante PDO
        //$msg = DB::table('messages')->where('id', $id)->first();

        // Busca por "id" desde el modelo o falla con error 404 si no existe.
        $msg = Message::findOrFail($id);
        return view('messages.edit', compact('msg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\CreateMessageRequest $request, $id)
    {
        /*
        // Actualizar datos mediante PDO
        DB::table('messages')->where('id', $id)->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'subject' => $request->input('subject'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'updated_at' => Carbon::now(),
        ]);
        */

        // Busca por "id" y actualizar.
        $msg = Message::findOrFail($id)->update($request->all());

        // Redireccionar
        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar mensaje
        //DB::table('messages')->where('id', $id)->delete();

        // Busca por "id" y actualizar.
        Message::findOrFail($id)->delete();

        // Redireccionar
        return redirect()->route('messages.index');
    }
}
