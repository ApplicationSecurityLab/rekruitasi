@extends('layouts.app')

@section('content')
    <div class="lab-greeting">
        <div class="fade-ct">
            <div class="center-flex text-white text-center">
                <img src="{{asset('img/logo_ans.png')}}" style="width: 10%">
                <h1 class="display-3">Application & Security</h1>
                <h2 class="display-4">Laboratory</h2>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <img src="{{asset('img/telkom_university_logo.png')}}" style="width: 60%">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('img/fte_logo.png')}}" style="width: 90%">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divisi">
        <div class="container">
            <h1 class="display-4 pt-4 text-center">Divisi</h1>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title">IDS</h2>
                            <p class="card-text">Intrusion Detection System</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-info btn-block" data-toggle="modal" data-target="#idsmodal">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title">VOIP</h2>
                            <p class="card-text">Voice Over Internet Protocol</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-info btn-block"  data-toggle="modal" data-target="#voipmodal">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title">Web</h2>
                            <p class="card-text">Web development</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-info btn-block"  data-toggle="modal" data-target="#webmodal">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title">IV</h2>
                            <p class="card-text">Interactive Video</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-info btn-block"  data-toggle="modal" data-target="#ivmodal">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title">GIS</h2>
                            <p class="card-text">Geographic Information System</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-info btn-block"  data-toggle="modal" data-target="#gismodal">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title">Game Tech</h2>
                            <p class="card-title">Game Technology</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-info btn-block"  data-toggle="modal" data-target="#gamemodal">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="tab-pane container" id="ids">...</div>
            <div class="tab-pane container" id="voip">...</div>
            <div class="tab-pane container" id="web"></div>
            <div class="tab-pane container" id="iv">...</div>
            <div class="tab-pane container" id="gis">...</div>
            <div class="tab-pane container" id="game">...</div>
        </div>
    </div>
    <br>
    <div class="video-row" style="background-color: snow">
        <div class="container">
            <h1 class="display-4 pt-3">Video</h1>
            <hr>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>

<div class="modal fade" id="idsmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">IDS</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5>Intrusion Detection System</h5>
                <p>Suatu sistem yang melakukan pengawasan lalu lintas jaringan dan pengawasan aktivitas yang mencurigakan dalam suatu sistem jaringan</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="voipmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">VOIP</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5>Voice Over Internet Protocol</h5>
                <p>bergerak dalam jaringan generasi mendatang dan protokol telekomunikasi</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="webmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">WEB</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5>Web Development</h5>
                <p>Dokumen yang ditulis dalam format HTML diakses melalui protokol untuk menyampaikan informasi dari web server ke browser klien</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ivmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">IV</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5>Interactive Video</h5>
                <p>Presentasi digital berbasis multimedia yang dapat mengambil input pengguna untuk melakukan beberapa tindakan</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="gismodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">GIS</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5>Geographic Information System</h5>
                <p>Membantu dalam perencanaan, pengawasan dan pengambilan keputusan dalam pembuatan jaringan di dalam area tertentu</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="gamemodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Game</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5>Game Technology</h5>
                <p>okus pada pengembangan teknologi dalam game dan pengembangan game</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection