<?php

class ConteudoController extends BaseController
{

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
        $conteudo->menu_link = Input::get('menu_link');
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