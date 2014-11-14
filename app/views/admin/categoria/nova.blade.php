@extends('admin.templates.admin_master')

@section('conteudo')
    <div class="col-lg-6">
        <h3>Nova categoria</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <div>
                    @include('template.errorPanel')
                </div>

                {{ Form::open(['url'=>'/admin/categoria/nova']) }}
                    <div class="row">
                        <div class="form-group col-lg-12">
                            {{ Form::label('nome', 'Nome:', ['class'=>'control-label']) }}
                            {{ Form::text('nome', null, ['class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            {{ Form::label('descricao', 'Descrição:', ['class'=>'control-label']) }}
                            {{ Form::textarea('descricao', null, ['class'=>'form-control', 'rows'=>'3']) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            {{ Form::button('Cadastrar', ['class'=>'btn btn-primary', 'type'=>'submit']) }}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@stop