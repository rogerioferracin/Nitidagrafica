@extends('template.master')

@section('header')
    @include('template.header')
@stop

@section('content')
    <div class="col-lg-8">
        <h2>{{ $conteudo->titulo }}</h2>
        <p>{{ $conteudo->texto }}</p>
    </div>
    <div class="col-lg-4">
        {{ HTML::image('/assets/images/offsetPrinting.jpg', 'Máquina offset imprimindo', ['class'=>'img-responsive']) }}
    </div>
@stop