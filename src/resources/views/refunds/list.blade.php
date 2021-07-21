@extends('layouts.main')

@section('title', 'Solicitações de Reembolso')

@section('content')
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
                <span class="name label 
                    @if ($refund->is_approved === 1)
                        label-success
                    @elseif ($refund->is_denied === 1)
                        label-danger
                    @else
                        label-info
                    @endif
                " style="min-width: 150px;
                    display: inline-block;">
                    @if ($refund->is_approved === 1)
                        Aprovado
                    @elseif ($refund->is_denied === 1)
                        Negado
                    @else
                        Aguardando Aprovação
                    @endif
                    </span> <span class="">{{ $refund->requester_name }} - {{ number_format($refund->value, 2, ',', '.') }}</span>
                <span class="text-muted" style="font-size: 11px;">- {{ $refund->description }}</span> <span class="badge">{{ date('d/m/Y H:i:s', strtotime($refund->created_at)) }}</span> <span class="pull-right">
                </span></span></a>
@endforeach
        </div>
    </div>

@endsection