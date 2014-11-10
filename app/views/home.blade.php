@extends('template.master')

@section('header')
<!-- Carousel
    ================================================== -->
    <div id="header-wrap">
    <div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
            {{ HTML::image('/assets/images/banner01.jpg') }}
        </div>
        <div class="item">
          {{ HTML::image('/assets/images/banner02.jpg') }}
        </div>
        <div class="item">
          {{ HTML::image('/assets/images/banner03.jpg') }}
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    </div>
    </div>
@stop

@section('content')
    <div class="marketing">
        <div class="col-lg-4">
            {{ HTML::image('/assets/images/sobre.jpg', null, ['class'=>'img-circle']) }}
            <h2><a href="{{ URL::to('paginas', ['link'=>'sobre']) }}">Sobre a gráfica</a></h2>
            <p>Conheça um pouco mais sobre a Nítida Gráfica.</p>
        </div>
        <div class="col-lg-4">
            {{ HTML::image('/assets/images/orcamento.jpg', null, ['class'=>'img-circle']) }}
            <h2><a href="{{ URL::to('/paginas/orcamento') }}">Orçamento</a></h2>
            <p>Solicite sua cotação de preços por aqui. É fácil, basta preencher o formulário.</p>
        </div>
        <div class="col-lg-4">
            {{ HTML::image('/assets/images/dicas-small.jpg', null, ['class'=>'img-circle']) }}
            <h2><a href="{{ URL::to('/paginas/dicas') }}">Dicas para boa impressão</a></h2>
            <p>Artigos com alguns macetes para seu impresso sair do jeito que você imagina, sem surpresas no final.</p>
        </div>
    </div>
@stop
