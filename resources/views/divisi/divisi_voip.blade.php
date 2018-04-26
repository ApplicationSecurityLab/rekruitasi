@extends('layouts.app')

@section('content')
    <br><br>
    <div class="jumbotron">
        <div class="container">
            <br>
            <h1 class="display-2">VOIP</h1>
        </div>
    </div>
    <div class="container">
        <h2>{{$divisi->nama_divisi}}</h2>
        <p style="font-size: 1.5rem">{{$divisi->keterangan_divisi}}</p>
        <hr>
        <p style="font-size: 1.5rem">Jobdesk: </p>
        <p style="font-size: 1.5rem">{{$divisi->jobdesk}}</p>
        <hr>
        <h2>Anggota Divisi</h2>
        <div class="row">
            @if($users)
                @foreach($users as $is)
                    <div class="col-md-6">
                        <div class="card mt-4">
                            <div class="row">
                                <div class="col-md-5">
                                    <div style="width: 100%; height: 200px; padding: 15px" class="text-center">
                                        <object data="" type="image/png" style='width:100%; height: 100%; object-fit: cover'>
                                            <img src="{{asset('img/user.svg')}}" style='width:100%; height: 100%; object-fit: contain'/>
                                        </object>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h2 class="card-title">{{$is->name}}</h2>
                                        <p class="card-text">{{$is->divisi}}</p>
                                        <p class="card-text">{{$is->jobdesk}}</p>
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
        <br><br>
    </div>
@endsection