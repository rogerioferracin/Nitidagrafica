<?php

class ConteudoController extends BaseController
{
    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => ['post', 'put', 'patch', 'delete']]);
    }

    /**
     * Página com lista dos conteudos
     */
    public function getIndex()
    {
        $conteudos = Conteudo::all();

        return View::make('admin.conteudo.index', compact('conteudos'))
            ->with('title', 'Conteudos cadastrados');
    }

    /**
     * Redireciona para pagina de atualização de conteudo
     */
    public function getAtualiza($id)
    {
        $conteudo = Conteudo::find($id);
        $categorias = DB::table('categorias')->orderBy('nome', 'asc')->lists('nome', 'id');

        if(!$conteudo) {
            return Redirect::to('admin.conteudo')
                ->with('message', 'Conteúdo não encontrado ou inexistente. Tente novamente');
        }

        return View::make('admin.conteudo.atualiza')
            ->with('title', 'Atualiza conteúdo')
            ->with('conteudo', $conteudo)
            ->with('categorias', $categorias);
    }

    /**
     * Atualiza conteudo do site
     */
    public function putAtualiza($id)
    {
        $rules = Conteudo::$rules;
        $rules['apelido'] = str_replace('{ignore_id}', $id, $rules['apelido']);
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::back()
                ->with('message', 'Ocorreu um erro ao validar o formulário')
                ->withErrors($validator)
                ->withInput();
        }

        $conteudo = Conteudo::find($id);
        if(!$conteudo) {
            return Redirect::to('/admin/conteudo')
                ->with('message', 'Conteúdo não encontrado ou inexistente. Tente Novamente.');
        }
        $conteudo->apelido = Input::get('apelido');
        $conteudo->titulo = Input::get('titulo');
        $conteudo->texto = Input::get('texto');
        $conteudo->categoria_id = Input::get('categoria_id');

        if(count($conteudo->getDirty()) > 0) {
            $conteudo->save();
            return Redirect::to('/admin/conteudo')
                ->with('message', 'Conteudo <b>' . $conteudo->titulo . '</b> atualizado com sucesso!');
        } else {
            return Redirect::to('/admin/conteudo')
                ->with('message', 'Conteudo <b>' . $conteudo->titulo . '</b> não sofreu alterações!');
        }


    }

    /**
     * Redireciona pagina de cadastro de conteudo
     */
    public function getNovo()
    {
        //$categorias = Categoria::all();
        $categorias = DB::table('categorias')->orderBy('nome', 'asc')->lists('nome', 'id');

        if(!$categorias) {
            return Redirect::to('/admin/categoria/nova')
                ->with('message', 'Você não possui nenhuma categoria cadastrada. Cadastre ao menos uma categoria');
        }

        return View::make('/admin/conteudo/novo')
            ->with('categorias', $categorias);
    }

    /**
     * Grava novo conteudo no banco
     */
    public function postNovo()
    {
        $validator = Validator::make(Input::all(), Conteudo::$rules);

        if($validator->fails()) {
            return Redirect::back()
                ->with('message', 'Ocorreram erro ao gravar o conteúdo' . Input::get('categoria_id'))
                ->withInput()
                ->withErrors($validator);
        }

        $conteudo = new Conteudo();
        $conteudo->apelido = Input::get('apelido');
        $conteudo->titulo = Input::get('titulo');
        $conteudo->texto = Input::get('texto');
        $conteudo->categoria_id = Input::get('categoria_id');

        if($conteudo->save()) {
            return Redirect::to('/admin/conteudo')
                ->with('message', 'Conteúdo gravado com sucesso');
        } else {
            return Redirect::to('/admin/conteudo')
                ->with('message', 'Ocorreu um erro ao gravar o novo conteúdo. Tente novamente!');
        }
    }

}