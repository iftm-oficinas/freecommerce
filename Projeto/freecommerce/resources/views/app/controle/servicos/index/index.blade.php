@extends('app.app')

@section('content')

    @include('app.controle.partials.menuCotrole')

    <div class="container">
        <h1>Servicos</h1>

        <a href="{{ route('controle.servico.create') }}" class="btn btn-default">Novo Servico</a>
        <br><br>

        <table class="table">
            <tr>
                <th>Servico</th>
                <th>Status</th>
                <th>Pedidos</th>
                <th>Avaliacao</th>
                <th>Acoes</th>
            </tr>

            <tr>
                <td>Titulo do Servico</td>
                <td>ATIVO</td>
                <td>32</td>
                <td><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></td>
                <td width="300">
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Visializar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i> Inativar </a>
                </td>
            </tr>
            <tr>
                <td>Titulo do Servico2</td>
                <td>ATIVO</td>
                <td>5</td>
                <td><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i></td>
                <td width="300">
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Visializar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i> Inativar </a>
                </td>
            </tr>
            <tr>
                <td>Titulo do Servico3</td>
                <td>INATIVO</td>
                <td>0</td>
                <td><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i><i class="glyphicon glyphicon-star-empty"></i></td>
                <td width="300">
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Visializar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i> &nbsp;&nbsp;Ativar&nbsp; </a>
                </td>
            </tr>
            {{--
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', ['id'=>$categoria->id]) }}">Editar</a> |
                        <a href="{{ route('categories.destroy', ['id'=>$categoria->id]) }}">Deletar</a>
                    </td>

                    <td width="300">
                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>Editar</a>
                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-eye"></i>Visializar</a>
                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i>Excluir</a>
                    </td>
                </tr>
            @endforeach
            --}}
        </table>
        {{--}{!! $categories->render() !!}--}}
    </div>

@endsection