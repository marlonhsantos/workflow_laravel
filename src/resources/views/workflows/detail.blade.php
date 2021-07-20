@extends('layouts.main')

@section('title', 'Detalhes da Solicitação')

@section('content')
<div class="card mb-3 col-sm-6">
    <div class="card-body">
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Descrição</h6>
        </div>
        <div class="col-sm-9 text-secondary" id="description">Carregando...</div>
        </div>
        <hr>
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Valor</h6>
        </div>
        <div class="col-sm-9 text-secondary" id="value">Carregando...</div>
        </div>
        <hr>
        <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Solicitante</h6>
        </div>
        <div class="col-sm-9 text-secondary" id="requester_name">Carregando...</div>
        </div>
        <hr>
        <form method="post">
            <input type="button" value="Aprovar" class="btn btn-primary" id="btn-aprovar" data-next_step="">
            <input type="button" value="Reprovar" class="btn btn-danger" id="btn-reprovar">
        </form>
    </div>
</div>
<script type="text/javascript">
var id = {{ $id }}
</script>
<script type="text/javascript" src="/js/workflow.js"></script>
@endsection