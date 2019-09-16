<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function index()
    {
        return view('pages/trabalheconosco');
    }

    public function post(Request $req)
    {
        $req->validate([
        'nome' => 'required',
        'email' => 'required',
        'fone' => 'required',
      ]);
        $data = [
        'nome'=>$req->nome,
        'email'=>$req->email,
        'fone'=>$req->fone,
      ];
        Mail::send('mail.mail', $data, function ($mensagem) use ($data) {
            $mensagem->from($data['email']);
            $mensagem->to('trabalhena@likepublicidade.com', 'Recruta Like');
            $mensagem->subject($data['nome'].' se inscreveu no Recruta Like!');
        });

      return redirect()->back()->with('alert', 'E-mail enviado com sucesso !');
      // $request->session()->flash('success', 'Contao realizado com sucesso.');
      // return redirect('pages/trabalheconosco')->with('flash_message', 'Contato realizado com sucesso');
    }
}
