@extends('layouts.main')

@section('title', 'Reembolsos')

@section('content')
    <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#open" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Inbox</a></li>
                <li><a href="#closed" data-toggle="tab"><span class="glyphicon glyphicon-check"></span>
                    Concluídos</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="open">

                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="text-center">Carregando...</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="closed">
                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="text-center">Carregando...</span>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="/js/inbox.js"></script>
@endsection