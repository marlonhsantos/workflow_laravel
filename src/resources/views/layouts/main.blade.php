@guest
<script type="text/javascript">
    document.write('Você está sendo redirecionado...');
    location.href = '/login';
</script>
@endguest
@auth
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <a href="/refunds/create" class="btn btn-success btn-sm btn-block" role="button"><i class="glyphicon glyphicon-usd"></i> Solicitar Reembolso</a>
            <!--
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    Mail <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mail</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Tasks</a></li>
                </ul>
            </div>
            -->
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default">
                    <div class="checkbox" style="margin: 0;">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div>
                </button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Aprovados</a></li>
                    <li><a href="#">Negados</a></li>
                    <li><a href="#">Aguardando Aprovação</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;&nbsp;</button>
            <div class="pull-right">
                <span class="text-muted"><b>1</b>–<b>50</b> of <b>160</b></span>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                </div>
            </div>
        </div>
    </div> 
    <hr>
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/inbox"><span class="badge pull-right" id="count_workflows">--</span> Inbox </a>
                </li>
                {{-- <li><a href="#">Usuários</a></li> --}}
                <li><a href="/refunds">Solicitações</a></li>
                <li><a href="/logout" id="logout_link">Sair</a>
                    <form action="/logout" method="POST" id="logout_form">
                    @csrf
                    </form>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
        <h3>@yield('title')</h3>
        <hr>
        @yield('content')
        </div>
    </div>
</div>

<link rel="stylesheet" href="/css/style.css">

<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
@endauth