<?php
class Conteudo extends Eloquent
{
    protected $table = 'conteudos';

    public function categoria()
    {
        return $this->belongsTo('Categoria', 'categoria_id');
    }

    protected $fillable = array('apelido', 'titulo', 'texto', 'categoria_id');

    public static $rules = array(
        'apelido' => 'required|max:40|unique:conteudos,apelido,{ignore_id}',
        'titulo' => 'required|max:80',
        'texto' => 'required',
        'categoria_id' => 'required'
    );
}