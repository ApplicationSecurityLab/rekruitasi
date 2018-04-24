@extends('layouts.app')

@section('content')
    <div style="background-color: snow; padding: 130px 50px 100px" class="text-center">
        <div class="container">
            <h1 class="display-2">List Posts</h1>
        </div>
    </div>
    <div class="posting container mt-5">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#ids">IDS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#voip">VOIP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#web">WEB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#iv">IV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#gis">GIS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#game">Game</a>
            </li>
        </ul>  
        <div class="tab-content">
            <div class="tab-pane active fade show container" id="ids">
                <div class="row">
                    @if($ids)
                        @foreach($ids as $is)
                            <div class="col-md-3">
                                <div class="card text-center mt-5">
                                    <object data="" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('img/folded-newspaper.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$is->post_title}}</h2>
                                        <p class="card-text">{{$is->divisi}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>Belum ada post</h1>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade container" id="voip">
                <div class="row">
                    @if($voip)
                        @foreach($voip as $vp)
                            <div class="col-md-3">
                                <div class="card text-center mt-5">
                                    <object data="" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('img/folded-newspaper.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$vp->post_title}}</h2>
                                        <p class="card-text">{{$vp->divisi}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>Belum ada post</h1>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade container" id="web">
                <div class="row">
                    @if($web)
                        @foreach($web as $wb)
                            <div class="col-md-3">
                                <div class="card text-center mt-5">
                                    <object data="" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('img/folded-newspaper.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$wb->post_title}}</h2>
                                        <p class="card-text">{{$wb->divisi}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>Belum ada post</h1>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade container" id="iv">
                <div class="row">
                    @if($iv)
                        @foreach($iv as $v)
                            <div class="col-md-3">
                                <div class="card text-center mt-5">
                                    <object data="" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('img/folded-newspaper.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$v->post_title}}</h2>
                                        <p class="card-text">{{$v->divisi}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>Belum ada post</h1>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade container" id="gis">
                <div class="row">
                    @if($gis)
                        @foreach($gis as $gs)
                            <div class="col-md-3">
                                <div class="card text-center mt-5">
                                    <object data="" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('img/folded-newspaper.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$gs->post_title}}</h2>
                                        <p class="card-text">{{$gs->divisi}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>Belum ada post</h1>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade container" id="game">
                <div class="row">
                    @if($game)
                        @foreach($game as $gm)
                            <div class="col-md-3">
                                <div class="card text-center mt-5">
                                    <object data="" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('img/folded-newspaper.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$gm->post_title}}</h2>
                                        <p class="card-text">{{$gm->divisi}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>Belum ada post</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection