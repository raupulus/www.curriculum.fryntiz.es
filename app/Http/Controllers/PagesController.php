<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PagesController extends Controller
{
  public function home()
  {
    return view('index');
  }

  public function objetive()
  {
    return view('objetive');
  }

  public function experience()
  {
    return view('experience');
  }

  public function education()
  {
    return view('education');
  }

  public function skills()
  {
    return view('skills');
  }

  public function contact()
  {
    return view('contact');
  }

  /*
   * Valida y comprueba el formulario de contacto para posteriormente enviar
   * el email.
   */
  public function sendMail(\App\Http\Requests\CreateMessageRequest $request)
  {
    // Devuelvo temporalmente los datos del formulario como JSON
    $msg = 'Procesando formulario con los siguientes datos:';

    foreach($request->all() as $name => $val) {
        //$msg .= '<br />'.$name.': '.$val.'<br />';
        $msg .= $name.': '.$val;
    }

    //Session::flash('sucess_message', $msg);
    return redirect()->route('contact')
                     ->with('sucess_message', $msg)
                     ->withCookie('sendmail', true, 2)  // Indica que envió un email
                     ->withCookie('sendmail_at', time(), 2);
    //return $request->all();
  }
}
