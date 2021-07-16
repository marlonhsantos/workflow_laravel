@extends('layouts.main')

@section('title', 'Reembolsos')

@section('content')
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Primary</a></li>
                <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>
                    Social</a></li>
                <li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-tags"></span>
                    Promotions</a></li>
                <li><a href="#settings" data-toggle="tab"><span class="glyphicon glyphicon-plus no-margin">
                </span></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                </label>
                            </div>
                            <span class="glyphicon glyphicon-star-empty"></span><span class="name label label-info" style="min-width: 120px;
                                display: inline-block;">Andres posada</span> <span class="">Nice work on the lastest version</span>
                            <span class="text-muted" style="font-size: 11px;">- More content here</span> <span class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                            </span></span></a><a href="#" class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                    </label>
                                </div>
                                <span class="glyphicon glyphicon-star-empty"></span><span class="name  label label-success" style="min-width: 120px;
                                    display: inline-block;">Juan acosta</span> <span class="">This is big title</span>
                                <span class="text-muted" style="font-size: 11px;">- I saw that you had..</span> <span class="badge">12:09 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                    </span></span></a><a href="#" class="list-group-item read">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                        <span class="glyphicon glyphicon-star"></span><span class="name  label label-warning" style="min-width: 120px;
                                            display: inline-block;">Mariana jaramillo</span> <span class="">This is big title</span>
                                        <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span class="badge">11:30 PM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                    </span>   
                                </span>  
                            </a>
                    </div>
                </div>
                <div class="tab-pane fade in" id="profile">
                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="text-center">This tab is empty.</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="messages">
                    ...</div>
                <div class="tab-pane fade in" id="settings">
                    This tab is empty.</div>
            </div>
@endsection