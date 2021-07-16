@extends('layouts.main')

@section('title', 'Solicitar Reembolso')

@section('content')
<h2>Solicitar Reembolso</h2>
<div id="refund-create-container" class="col-md-6 offset-md-3">
    <form action="/refunds" method="post">
    @csrf
        <div class="form-group">
            <label for="description">Despesa</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descrição da Despesa">
        </div>
        <div class="form-group">
            <label for="requester_name">Requisitante</label>
            <input type="text" class="form-control" id="requester_name" name="requester_name" placeholder="Nome do Solicitante">
        </div>
        <div class="form-group">
            <label for="value">Valor</label>
            <input type="text" class="form-control" id="value" name="value" placeholder="R$ 0,00">
        </div>
        <input type="submit" value="Solicitar" class="btn btn-primary">
    </form>
</div>

@endsection