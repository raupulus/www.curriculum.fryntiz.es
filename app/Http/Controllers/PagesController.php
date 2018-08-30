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

  public function sendMail(Request $request)
  {
    /*
     * Validación del formulario
     */
    $this->validate($request, [
      'first_name' => [ 'required', 'min:3' ],
      'last_name' => [ 'nullable', 'min:3' ],
      'subject' => [ 'required', 'min:10' ],
      'email' => [ 'nullable', 'email' ],
      'message' => [ 'min:20', 'max:1000' ],
    ]);

    // Devuelvo temporalmente los datos del formulario como JSON
    $msg = 'Procesando formulario con los siguientes datos:';

    foreach($request->all() as $name => $val) {
        //$msg .= '<br />'.$name.': '.$val.'<br />';
        $msg .= $name.': '.$val;
    }

    Session::flash('flash_message', $msg);

    return redirect()->route('contact');
    //return $request->all();
  }
}
