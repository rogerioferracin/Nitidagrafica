<?php


class CategoriaController extends BaseController
{
    /**
     * Função Index categorias
     * @return $this Categorias cadastradas no banco
     */
    public function getIndex()
    {
        $categorias = Categoria::all();
        return View::make('admin.categoria.index', compact('categorias'))
            ->with('title', 'Categorias');
    }

    /**
     * Redireciona para pagina de edição da categoria
     */
    public function getAtualiza($id)
    {
        $categoria = Categoria::find($id);

        if(!$categoria) {
            return Redirect::to('/admin/categoria')
                ->with('message', 'Categoria não encontrada ou inexistente. Tente novamente');
        }

        return View::make('/admin/categoria/atualiza')
            ->with('title', 'Atualiza categoria')
            ->with('categoria', $categoria);

    }

    /**
     * Atualiza categoria no banco
     */
    public function postAtualiza($id)
    {
        //TODO atualiza categoria
    }

    /**
     * Redireciona para pagina de cadastro de categoria
     */
    public function getNova()
    {
        return View::make('admin.categoria.nova')
            ->with('title', 'Nova categoria');
    }

    /**
     * Cadastra nova categoria no banco
     */
    public function postNova()
    {

        $validator = Validator::make(Input::all(), Categoria::$rules);

        if($validator->fails()) {
            return Redirect::back()
                ->with('message', 'Não foi possível cadastrar a nova categoria')
                ->withErrors($validator)
                ->withInput();
        }

        $categoria = new Categoria();
        $categoria->nome = Input::get('nome');
        $categoria->descricao = Input::get('descricao');

        if($categoria->save()) {
            return Redirect::to('/admin/categoria')
                ->with('message', 'Categoria cadastrada com sucesso!');
        } else {
            return Redirect::to('/admin/categoria')
                ->with('message', 'Ocorreu um erro ao cadastrar a nova categoria. Tente novamente!');
        }
    }
}