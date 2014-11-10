<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Nítida Gráfica</title>

    <link rel="shortcut icon" href="{{ URL::to('/assets/images/favicon.ico') }}" >

    {{ HTML::style('/assets/dist/css/bootstrap_cosmo.css') }}
    {{--{{ HTML::style('/assets/dist/css/bootstrap-theme.min.css') }}--}}
    {{ HTML::style('/assets/css/custom.css') }}
</head>
<body>
    {{--NAVBAR--}}
    <nav class="nav navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Nítida gráfica</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li><a href="{{ URL::to('/paginas', ['link'=>'sobre']) }}">Sobre a gráfica</a></li>
                    <li><a href="{{ URL::to('/paginas/orcamento') }}">Orçamento</a></li>
                    <li><a href="{{ URL::to('/paginas/arquivos') }}">Envio de arquivo</a></li>
                    <li><a href="{{ URL::to('/paginas/dicas') }}">Dicas para boa impressão</a></li>
                    <li><a href="{{ URL::to('/paginas/contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{--INSERE O HEADER DA PAGINA--}}
    @yield('header')


    {{--CONTENT--}}
    <div id="content">
        {{--MESSAGES--}}
        @if(Session::has('message'))
            <div class="container">

                <div class="col-lg-12 alert alert-info alert-dismissable">
                    <button class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                    <table>
                        <tr>
                            <td width="50px"><i class="glyphicon glyphicon-info-sign glyphicon2em"></i></td>
                            <td>{{ Session::get('message') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        @endif
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>

    {{--FOOTER--}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    {{ HTML::image('/assets/images/logo-muted-100.jpg', 'Logotipo da grafica cinza', ['class'=>'img-responsive']) }}
                </div>
                <div class="col-lg-10">
                    <table height="100px">
                        <tr>
                            <td valign="middle" class="text-muted">
                                <span class="small">2014 &copy;. Todos os direitos reservados.</span><br />
                                <span class="small">Tel. (12) 3322-8158 / comercial@nitidagrafica.com.br</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    {{ HTML::script('/assets/dist/js/jquery-1.11.1.min.js') }}
    {{ HTML::script('/assets/dist/js/bootstrap.min.js') }}

    {{--SCRIPTS EXCLUSIVOS DA PAGINA--}}
    @yield('scripts')
</body>
</html>