<?php

class Categoria extends Eloquent
{
    protected $table = 'categorias';

    protected $fillable = array('nome', 'descricao');

    public static $rules = array(
        'nome' => 'required|min:4|max:40',
        'descricao' => 'min:10|max:255'
    );
}