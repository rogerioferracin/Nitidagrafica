@extends('template.master')

@section('header')
    @include('template.header')
@stop

@section('content')
    <div class="col-lg-8">
        <h3>Solicitação de orçamento</h3>
    </div>
    <div class="col-lg-4">
        {{ HTML::image('/assets/images/contato.jpg', 'Imagem de ilustração de formulário de contato', ['class'=>'img-responsive']) }}
    </div>
@stop