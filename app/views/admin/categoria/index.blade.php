@extends('admin.templates.admin_master')

@section('conteudo')
    <div class="col-lg-6">
        <h3>Categorias cadastradas</h3>
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista todas categorias cadastradas
            </div>
            <div class="panel-body">
                @if(count($categorias) > 0)
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Id:</th>
                            <th>Nome:</th>
                            <th>Descrição:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td><a href="{{ URL::to('/admin/categoria/atualiza', ['id'=>$cat->id]) }}">{{ $cat->nome }}</a></td>
                                <td>{{ $cat->descricao }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <p>Nenhuma categoria cadastrada. <a href="{{ URL::to('/admin/categoria/nova') }}">Cadastrar nova categoria</a> </p>
                @endif
            </div>
        </div>
    </div>
@stop