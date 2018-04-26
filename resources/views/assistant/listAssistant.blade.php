@extends('layouts.app')

@section('content')
    <div style="background-image: url({{asset('img/material-wp.jpg')}}); background-position: bottom; padding: 130px 50px 100px" class="text-center text-white">
        <div class="container">
            <br>
            <h1 class="display-2">List Assistant</h1>
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
                            <div class="col-md-6">
                                <div class="card mt-4">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                <object data="http://localhost:8000/img/Aslab/{{$is->photo}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="rounded-circle">
                                                    <img src="{{asset('img/user.svg')}}" style='width:100%; height: 100%; object-fit: contain'/>
                                                </object>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h2 class="card-title">{{$is->name}}</h2>
                                                <p class="card-text">{{$is->divisi}}</p>
                                                <p class="card-text">{{$is->jurusan}}</p>
                                            </div>
                                        </div>
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
                            <div class="col-md-6">
                                <div class="card mt-4">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                <object data="http://localhost:8000/img/Aslab/{{$vp->photo}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="rounded-circle">
                                                    <img src="{{asset('img/user.svg')}}" style='width:100%; height: 100%; object-fit: contain'/>
                                                </object>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h2 class="card-title">{{$vp->name}}</h2>
                                                <p class="card-text">{{$vp->divisi}}</p>
                                                <p class="card-text">{{$vp->jurusan}}</p>
                                            </div>
                                        </div>
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
                            <div class="col-md-6">
                                <div class="card mt-4">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                <object data="http://localhost:8000/img/Aslab/{{$wb->photo}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="rounded-circle">
                                                    <img src="{{asset('img/user.svg')}}" style='width:100%; height: 100%; object-fit: contain'/>
                                                </object>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h2 class="card-title">{{$wb->name}}</h2>
                                                <p class="card-text">{{$wb->divisi}}</p>
                                                <p class="card-text">{{$wb->jurusan}}</p>
                                            </div>
                                        </div>
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
                            <div class="col-md-6">
                                <div class="card mt-4">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                <object data="http://localhost:8000/img/Aslab/{{$v->photo}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="rounded-circle">
                                                    <img src="{{asset('img/user.svg')}}" style='width:100%; height: 100%; object-fit: contain'/>
                                                </object>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h2 class="card-title">{{$v->name}}</h2>
                                                <p class="card-text">{{$v->divisi}}</p>
                                                <p class="card-text">{{$v->jurusan}}</p>
                                            </div>
                                        </div>
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
                            <div class="col-md-6">
                                <div class="card mt-4">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                <object data="http://localhost:8000/img/Aslab/{{$gs->photo}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="rounded-circle">
                                                    <img src="{{asset('img/user.svg')}}" style='width:100%; height: 100%; object-fit: contain'/>
                                                </object>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h2 class="card-title">{{$gs->name}}</h2>
                                                <p class="card-text">{{$gs->divisi}}</p>
                                                <p class="card-text">{{$gs->jurusan}}</p>
                                            </div>
                                        </div>
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
                            <div class="col-md-6">
                                <div class="card mt-4">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                <object data="http://localhost:8000/img/Aslab/{{$gm->photo}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="rounded-circle">
                                                    <img src="{{asset('img/user.svg')}}" style='width:100%; height: 100%; object-fit: contain'/>
                                                </object>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h2 class="card-title">{{$gm->name}}</h2>
                                                <p class="card-text">{{$gm->divisi}}</p>
                                                <p class="card-text">{{$gm->jurusan}}</p>
                                            </div>
                                        </div>
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
    <br><br>
@endsection