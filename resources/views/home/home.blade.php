@extends('templates.app')

@section('content')
<div class="well text-center">
    <img src="{!! asset('images/logocindacta.png') !!}" alt=""/>
    <h1>
        <span class="label label-default">TIOP</span><br>
        <small>Controle de Escala de Sobreaviso</small>
    </h1>
</div>
<iframe src="" id="contentLoad" name="contentLoad" frameborder="0"></iframe>
@stop
