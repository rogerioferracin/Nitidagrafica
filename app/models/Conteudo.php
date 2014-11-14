<?php
class Conteudo extends Eloquent
{
    protected $table = 'conteudos';

    public function categoria()
    {
        return $this->belongsTo('Categoria', 'categoria_id');
    }

    protected $fillable = array('menu_link', 'titulo', 'texto', 'categoria_id');

    public static $rules = array(
        'menu_link' => 'required|max:20',
        'titulo' => 'required|max:40',
        'texto' => 'required',
        'categoria_id' => 'required'
    );
}