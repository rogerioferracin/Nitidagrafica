@extends('admin.templates.admin_master')

@section('conteudo')
    <div class="col-lg-6">
        <h2>Novo conteúdo</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <div>
                    @include('template.errorPanel')
                </div>

                {{ Form::open(['url'=>'/admin/conteudo/novo']) }}
                    <div class="form-group col-lg-12">
                        {{ Form::label('titulo', 'Título', ['class'=>'control-label']) }}
                        {{ Form::text('titulo', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group col-lg-6">
                        {{ Form::label('menu_link', 'Nome para link', ['class'=>'control-label']) }}
                        {{ Form::text('menu_link', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group col-lg-6">
                        {{ Form::label('categoria_id', 'Categoria', ['class'=>'control-label']) }}
                        {{ Form::select('categoria_id', $categorias, null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group col-lg-12">
                        {{ Form::label('texto', 'Texto', ['class'=>'control-label']) }}
                        {{ Form::textarea('texto', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group col-lg-12">
                        {{ Form::button('Gravar', ['class'=>'btn btn-primary', 'type'=>'submit']) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop