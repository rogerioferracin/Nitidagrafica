<div id="#side-menu">
    <div class="panel-group" role="tablist">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="collapseListGroupHeadingCategoria">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#side-menu" href="#collapseListCategoria" aria-expanded="false" aria-controls="collapseListCategoria">
                        Categoria <i class="glyphicon glyphicon-chevron-down pull-right small"></i>
                    </a>
                </h4>
            </div>
            <div id="collapseListCategoria" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeadingCategoria">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ URL::to('/admin/categoria/nova') }}">Nova categoria</a></li>
                    <li class="list-group-item"><a href="{{ URL::to('/admin/categoria') }}">Lista todas</a> </li>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="collapseListGroupHeadingConteudo">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#side-menu" href="#collapseListConteudo" aria-expanded="false" aria-controls="collapseListConteudo">
                        Conteudo <i class="glyphicon glyphicon-chevron-down pull-right small"></i>
                    </a>
                </h4>
            </div>
            <div id="collapseListConteudo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeadingConteudo">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ URL::to('/admin/conteudo/novo') }}">Novo conteúdo</a></li>
                    <li class="list-group-item"><a href="{{ URL::to('/admin/conteudo') }}">Lista todos</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>