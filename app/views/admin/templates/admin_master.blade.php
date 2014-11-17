<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Nítida Gráfica -  {{{ $title or  'Administração'}}}</title>

    <link rel="shortcut icon" href="{{ URL::to('/assets/images/favicon.ico') }}" >

    {{ HTML::style('/assets/dist/css/bootstrap_cosmo.css') }}
    {{ HTML::style('/assets/css/dashboard.css') }}
    {{ HTML::style('/assets/css/custom.css') }}
</head>
<body>
   @include('admin.templates.menu')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            @include('admin.templates.sidebar')
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="row">
                <h2 class="page-header">Administração de conteúdo</h2>
                <div class="row">
                    {{--MESSAGES--}}
                    @if(Session::has('message'))
                        <div class="col-lg-12 alert alert-info alert-dismissable">
                            <button class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                            <table>
                                <tr>
                                    <td width="50px"><i class="glyphicon glyphicon-info-sign glyphicon2em"></i></td>
                                    <td>{{ Session::get('message') }}</td>
                                </tr>
                            </table>
                        </div>
                    @endif
                </div>
                <div class="row">
                    @yield('conteudo')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- SCRIPTS -->
{{ HTML::script('/assets/dist/js/jquery-1.11.1.min.js') }}
{{ HTML::script('/assets/dist/js/bootstrap.min.js') }}
{{ HTML::script('/assets/js/jquery.cookie.js') }}
{{ HTML::script('/assets/ckeditor/ckeditor.js') }}

@yield('script')

<script>
    $(document).ready(function(){
        $('#side-menu a').on('click', function(){
            $('#side-menu').find('.active').removeClass('active');
            $(this).addClass('active');
            $.cookie('activeMenuItem', $(this).attr('id'));
        });

        var activeMenu = $.cookie('activeMenuItem');

        var last = $.cookie('activeAccordionGroup');
        if(last!=null) {
            //remove default collapse setting
            $('#side-menu .collapse').removeClass('in');
            //show the las visible group
            $('$'+last).collapse('show');
        }

        $('#side-menu').bind('shown.bs.collapse', function(){
            var active = $('#side-menu in').attr('id');
            $.cookie('activeAccordionGroup', active);
        });
    });
</script>

</body>
</html>