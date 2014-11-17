@extends('admin.templates.admin_master')

@section('conteudo')
    <div class="col-lg-6">
        <h2>Conteúdos cadastrados</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                @if(count($conteudos) > 0)
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Id:</th>
                            <th>Titulo:</th>
                            <th>Apelido:</th>
                            <th>Categoria:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($conteudos as $conteudo)
                            <tr>
                                <td>{{ $conteudo->id }}</td>
                                <td><a href="{{ URL::to('/admin/conteudo/atualiza', ['id'=>$conteudo->id]) }}">{{ $conteudo->titulo }}</a></td>
                                <td><a href="{{ URL::to('/admin/conteudo/atualiza', ['id'=>$conteudo->id]) }}">{{ $conteudo->alias }}</a></td>
                                <td>{{ $conteudo->categoria->nome }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <p>Nenhuma conteúdo cadastrado. <a href="{{ URL::to('/admin/conteudo/novo') }}">Cadastrar novo conteúdo</a> </p>
                @endif
            </div>
        </div>
    </div>
@stop