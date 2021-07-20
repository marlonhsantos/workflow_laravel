@extends('layouts.main')

@section('title', 'Reembolsos')

@section('content')
    <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Inbox</a></li>
                <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-check"></span>
                    Concluídos</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
@foreach($workflows as $workflow)
                        <a href="/workflow/{{ $workflow->id }}" class="list-group-item">
                            <!--
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                </label>
                            </div>
            -->             <span>#{{ $workflow->id }}</span>
                            <span class="name label label-info" style="min-width: 120px;
                                display: inline-block;">Aguardando Aprovação</span> <span class="">{{ $workflow->refund->requester_name }} - {{ number_format($workflow->refund->value, 2, ',', '.') }}</span>
                            <span class="text-muted" style="font-size: 11px;">- {{ $workflow->refund->description }}</span> <span class="badge">{{ date('d/m/Y H:i:s', strtotime($workflow->created_at)) }}</span> <span class="pull-right">
                            </span></span>
                        </a>
@endforeach
                    </div>
                </div>
                <div class="tab-pane fade in" id="profile">
                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="text-center">Sem registros.</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="messages">
                    ...</div>
                <div class="tab-pane fade in" id="settings">
                    This tab is empty.</div>
            </div>
@endsection