@extends('layouts.main')

@section('title', 'Solicitar Reembolso')

@section('content')
<h2>Solicitações de Reembolso</h2>
    <div class="tab-pane" id="list">
        <div class="list-group">
@foreach($refunds as $refund)
            <a href="#" class="list-group-item">
                <!--
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
-->
                <span class="name label label-info" style="min-width: 120px;
                    display: inline-block;">Aguardando Aprovação</span> <span class="">{{ $refund->requester_name }} - {{ number_format($refund->value, 2, ',', '.') }}</span>
                <span class="text-muted" style="font-size: 11px;">- {{ $refund->description }}</span> <span class="badge">{{ date('d/m/Y H:i:s', strtotime($refund->created_at)) }}</span> <span class="pull-right">
                </span></span></a>
@endforeach
        </div>
    </div>

@endsection