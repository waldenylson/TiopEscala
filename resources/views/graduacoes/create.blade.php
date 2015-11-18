@extends('templates.fancyboxContent')
@section('content')
    <h2>
        <i class="fa fa-plus"></i>
        Cadastrar Graduação
    </h2>

    {!! Form::open(['route' => 'graduacoes.store']) !!}
        <div class="form-group well">
            <div class="row">
                <div class="col-md-5">
                    {!! Form::label('sigla', 'Sigla', ['class' => 'control-labol']) !!}
                    {!! Form::text('sigla', null, ['class' => 'form-control', 'id' => 'sigla', 'autofocus' => '']) !!}
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-5">
                    {!! Form::label('descricao', 'Descrição', ['class' => 'control-label']) !!}
                    {!! Form::textarea('descricao', null, ['class' => 'form-control', 'id' => 'descricao']) !!}
                </div>
            </div>
        </div><br>
        <button class="btn btn-primary" type="submit">
            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
        </button>
        <button class="btn btn-danger fancybox-item fancybox-close" id="btn-cancelar" type="button">
            <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
        </button>
    {!! Form::close() !!}
@stop
