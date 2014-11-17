@extends('admin.templates.admin_master')

@section('conteudo')
    <div class="col-lg-8">
        <h2>Atualiza conteúdo</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <div>
                    @include('template.errorPanel')
                </div>

                {{ Form::model($conteudo, array('url'=>array('/admin/conteudo/atualiza', $conteudo->id), 'method'=>'PUT')) }}
                    <div class="form-group col-lg-12">
                        {{ Form::label('titulo', 'Título', ['class'=>'control-label']) }}
                        {{ Form::text('titulo', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group col-lg-6">
                        {{ Form::label('apelido', 'Apelido:', ['class'=>'control-label']) }}
                        {{ Form::text('apelido', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group col-lg-6">
                        {{ Form::label('categoria_id', 'Categoria', ['class'=>'control-label']) }}
                        {{ Form::select('categoria_id', $categorias, null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group col-lg-12">
                        {{ Form::label('texto', 'Texto', ['class'=>'control-label']) }}
                        {{ Form::textarea('texto', null, ['class'=>'form-control', 'id'=>'texto']) }}
                    </div>
                    <div class="form-group col-lg-12">
                        {{ Form::button('Gravar', ['class'=>'btn btn-primary', 'type'=>'submit']) }}
                    </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>

        CKEDITOR.replace('texto');

    </script>
@stop