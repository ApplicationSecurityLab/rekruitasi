@extends('layouts.app')

@section('content')
    <div style="background-color: snow; padding: 130px 50px 100px" class="text-center">
        <div class="container">
            <h1 class="display-2">List Posts</h1>
        </div>
    </div>
    <div class="posting container mt-4">
        <div class="row">
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active fade show container" id="all">
                        <div class="row">
                            @if($all)
                                @foreach($all as $is)
                                    <div class="col-md-12">
                                        <div class="card mt-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                        <object data="{{ asset('uploadfoto/'. $is->gambar)}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="card-img-top">
                                                            <img src="{{asset('img/folded-newspaper.svg')}}" style='width:100%; height: 100%; object-fit: contain' class="card-img-top"/>
                                                        </object>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{$is->post_title}}</h2>
                                                        <p class="card-text">{{$is->divisi}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="/show/post/{{$is->id_post}}" class="btn btn-info btn-block">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h1>Belum ada post</h1>
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane fade container" id="ids">
                        <div class="row">
                            @if($ids)
                                @foreach($ids as $is)
                                    <div class="col-md-12">
                                        <div class="card mt-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                        <object data="{{ asset('uploadfoto/'. $is->gambar)}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="card-img-top">
                                                            <img src="{{asset('img/folded-newspaper.svg')}}" style='width:100%; height: 100%; object-fit: contain' class="card-img-top"/>
                                                        </object>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{$is->post_title}}</h2>
                                                        <p class="card-text">{{$is->divisi}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="/show/post/{{$is->id_post}}" class="btn btn-info btn-block">Selengkapnya</a>
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
                                    <div class="col-md-12">
                                        <div class="card mt-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                        <object data="{{ asset('uploadfoto/'. $vp->gambar)}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="card-img-top">
                                                            <img src="{{asset('img/folded-newspaper.svg')}}" style='width:100%; height: 100%; object-fit: contain' class="card-img-top"/>
                                                        </object>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{$vp->post_title}}</h2>
                                                        <p class="card-text">{{$vp->divisi}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="/show/post/{{$vp->id_post}}" class="btn btn-info btn-block">Selengkapnya</a>
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
                                    <div class="col-md-12">
                                        <div class="card mt-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                        <object data="{{ asset('uploadfoto/'. $wb->gambar)}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="card-img-top">
                                                            <img src="{{asset('img/folded-newspaper.svg')}}" style='width:100%; height: 100%; object-fit: contain' class="card-img-top"/>
                                                        </object>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{$wb->post_title}}</h2>
                                                        <p class="card-text">{{$wb->divisi}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="/show/post/{{$wb->id_post}}" class="btn btn-info btn-block">Selengkapnya</a>
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
                                    <div class="col-md-12">
                                        <div class="card mt-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                        <object data="{{ asset('uploadfoto/'. $v->gambar)}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="card-img-top">
                                                            <img src="{{asset('img/folded-newspaper.svg')}}" style='width:100%; height: 100%; object-fit: contain' class="card-img-top"/>
                                                        </object>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{$v->post_title}}</h2>
                                                        <p class="card-text">{{$v->divisi}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="/show/post/{{$v->id_post}}" class="btn btn-info btn-block">Selengkapnya</a>
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
                                @foreach($gis as $is)
                                    <div class="col-md-12">
                                        <div class="card mt-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                        <object data="{{ asset('uploadfoto/'. $is->gambar)}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="card-img-top">
                                                            <img src="{{asset('img/folded-newspaper.svg')}}" style='width:100%; height: 100%; object-fit: contain' class="card-img-top"/>
                                                        </object>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{$is->post_title}}</h2>
                                                        <p class="card-text">{{$is->divisi}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="/show/post/{{$is->id_post}}" class="btn btn-info btn-block">Selengkapnya</a>
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
                                @foreach($game as $is)
                                    <div class="col-md-12">
                                        <div class="card mt-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                                        <object data="{{ asset('uploadfoto/'. $is->gambar)}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="card-img-top">
                                                            <img src="{{asset('img/folded-newspaper.svg')}}" style='width:100%; height: 100%; object-fit: contain' class="card-img-top"/>
                                                        </object>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{$is->post_title}}</h2>
                                                        <p class="card-text">{{$is->divisi}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="/show/post/{{$is->id_post}}" class="btn btn-info btn-block">Selengkapnya</a>
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
            <div class="col-md-3 mt-4">
                <ul class="nav nav-pills nav-justified" style="display: block">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#all">All Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#ids">IDS</a>
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
            </div>
        </div>
    </div>
@endsection