<?php
class PaginaController extends BaseController
{
    public function getConteudo($apelido)
    {
        $conteudo = Conteudo::where('apelido', '=', $apelido)->firstOrFail();

        return View::make('/paginas/conteudo')
            ->with('conteudo', $conteudo)
            ->with('title', 'Sobre a gráfica');
    }

    /**
     * FORM DE CONTATO
     */
    public function getContato()
    {
        return View::make('/paginas/contato');
    }

    public function postContato()
    {
        $rules  = array(
            'nome'      =>  'required|min:4',
            'email'     =>  'required|email',
            'assunto'   =>  'required|min:4',
            'mensagem'  =>  'required|min:20'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->passes()) {

            $data = array();
            $data['nome'] = Input::get('nome');
            $data['empresa'] = Input::get('empresa');
            $data['email'] = Input::get('email');
            $data['assunto'] = Input::get('assunto');
            $data['mensagem'] = Input::get('mensagem');


            Mail::send('emails.contato', $data, function($m){
                $m->from('artefinal@nitidagrafica.com.br');
                $m->to('artefinal@nitidagrafica.com.br')
                    ->replyTo('artefinal@nitidagrafica.com.br')
                    ->cc(Input::get('email'))
                    ->subject('Contato via site - ' . Input::get('assunto'));
            });

            return Redirect::back()
                ->with('message', 'Form enviado com sucesso');
        }

        return Redirect::back()
            ->with('message', 'Não foi possível envia sua mensagem')
            ->withErrors($validator)
            ->withInput();
    }

    /**
     * FORM DE ORCAMENTO
     */
    public function getOrcamento()
    {
        return View::make('paginas.orcamento');
    }

    public function getArquivos()
    {
        return View::make('paginas.arquivos');
    }

    public function getDicas()
    {
        return View::make('paginas.dicas')
            ->with('title', 'Dicas para uma boa impressão');
    }
}