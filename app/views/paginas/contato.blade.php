@extends('template.master')

@section('header')
    @include('template.header')
@stop

@section('content')
    <div class="col-lg-8">
        <h3>Fale conosco</h3>
        <div class="panel panel-default">
            <div class="panel-heading">
                Entre em contato conosco que teremos o prazer em lhe atender!
            </div>
            <div class="panel-body">
                <div>
                    @include('template.errorPanel')
                </div>
                {{ Form::open(['url'=>'/paginas/contato']) }}
                    <div class="col-lg-12 form-group">
                        {{ Form::label('nome', 'Nome:*' ,['class'=>'control-label']) }}
                        {{ Form::text('nome', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="col-lg-12 form-group">
                        {{ Form::label('empresa', 'Empresa:' ,['class'=>'control-label']) }}
                        {{ Form::text('empresa', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="col-lg-12 form-group">
                        {{ Form::label('email', 'Email:*' ,['class'=>'control-label']) }}
                        {{ Form::text('email', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="col-lg-12 form-group">
                        {{ Form::label('assunto', 'Assunto:*' ,['class'=>'control-label']) }}
                        {{ Form::text('assunto', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="col-lg-12 form-group">
                        {{ Form::label('mensagem', 'Mensagem:*' ,['class'=>'control-label']) }}
                        {{ Form::textarea('mensagem', null, ['class'=>'form-control', 'rows'=>'3']) }}
                    </div>
                    <div class="col-lg-12">
                        {{ Form::submit('Enviar', ['class'=>'btn btn-primary']) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        {{ HTML::image('/assets/images/contato.jpg', 'Imagem de ilustração de formulário de contato', ['class'=>'img-responsive']) }}
    </div>
@stop