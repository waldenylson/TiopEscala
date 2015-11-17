@extends('templates.fancyboxContent')
@section('content')
   <h2>
        <i class="fa fa-star"></i>
        Graduação Cadastradas
    </h2>
    <hr/>
    @if(count($graduacoes) > 0)
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Sigla</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($graduacoes as $graduacao)
                <tr>
                    <td>{!! $graduacao->sigla     !!}</td>
                    <td>{!! $graduacao->descricao !!}</td>
                    <td width="1%" nowrap>
                        <a href="{!! route('graduacoes.edit', $graduacao->id) !!}" class="btn btn-primary btn-xs">
                            <i class="fa fa-fw fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('graduacoes.delete', $graduacao->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-fw fa-remove"></i> remover
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhum Posto/Graduação ainda cadastrado.</h5>
    @endif
@stop
