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
        // Devuelvo temporalmente los datos del formulario como JSON
        $msg = 'Procesando formulario con los siguientes datos:';

        foreach($request->all() as $name => $val) {
            //$msg .= '<br />'.$name.': '.$val.'<br />';
            $msg .= $name.': '.$val;
        }

        Session::flash('flash_message', $msg);

        return redirect()->route('contact');
    }
}
