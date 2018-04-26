@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <object data="" type="image/png" style='width:100%'>
                                <img src="{{asset('img/user.svg')}}" style='width:100%' class="mt-3"/>
                            </object>
                        </div>
                        <div class="col-md-10 pt-5">
                            <h2 class="card-title">{{Auth::user()->name}}</h2>
                            <h4 class="card-text">{{Auth::user()->email}}</h4>
                            @if(Auth::user()->isSuper)
                                <h4 class="card-text">Superadmin</h4> 
                            @elseif(Auth::user()->isAdmin)
                                <h4 class="card-text">Admin</h4> 
                            @else
                                <h4 class="card-text">User</h4> 
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->isSuper)
        <ul class="nav nav-pills nav-justified mt-4">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#list">List Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#cradmin">Buat admin</a>
            </li>
        </ul>  
        <div class="tab-content">
            <div class="tab-pane active fade show container" id="list">
                @if($users)
                    <div class="row">
                        @foreach($users as $user)
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
                                                <div style="height: 80px">
                                                    <h2 class="card-title">{{$user->name}}</h2>
                                                </div>
                                                <p class="card-text">{{$user->divisi}}</p>
                                                <p class="card-text">{{$user->jobdesk}}</p>
                                                <form action="{{route('admin.delete.user')}}" method="post" style="display: inline-block">
                                                    @csrf
                                                    <input type="hidden" name="id_user" value="{{$user->id}}" />
                                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                                <button class="btn btn-info" data-toggle="modal" data-target="#updateuser{{$user->id}}"><i class="fas fa-wrench"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-3">
                                <div class="card text-center">
                                    <object data="" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('img/user.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$user->name}}</h2>
                                        <p class="card-text">{{$user->divisi}}</p>
                                        <p class="card-text">{{$user->jobdesk}}</p>
                                        <form action="{{route('admin.delete.user')}}" method="post" style="display: inline-block">
                                            @csrf
                                            <input type="hidden" name="id_user" value="{{$user->id}}" />
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#updateuser{{$user->id}}"><i class="fas fa-wrench"></i></button>
                                    </div>
                                </div>
                            </div>-->
                            <!-- The Modal -->
                            <div class="modal fade" id="updateuser{{$user->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update user {{$user->name}}</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('admin.update.user') }}">
                                                @csrf
                                                <input type="hidden" name="admin" value="1" />
                                                <input type="hidden" name="id_user" value="{{$user->id}}" />
                                                <label for="name">{{ __('Name') }}</label>
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                                <br>
                                                <label for="divisi">{{ __('Divisi') }}</label>
                                                <select name="divisi" class="form-control" required>
                                                    <option value="IDS">IDS</option>
                                                    <option value="VOIP">VOIP</option>
                                                    <option value="WEB">WEB</option>
                                                    <option value="GIS">GIS</option>
                                                    <option value="IV">IV</option>
                                                    <option value="Game Tech">Game Tech</option>
                                                </select>
                                                <br>
                                                <label for="jobdesk">{{ __('Jobdesk') }}</label>
                                                <input type="text" class="form-control" name="jobdesk" value="{{$user->jobdesk}}" required/>
                                                <br>
                                                <button type="submit" class="btn btn-success">Update user</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else 

                @endif
            </div>
            <div class="tab-pane fade container" id="cradmin">
                <br>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('create.admin') }}">
                                @csrf
                                <input type="hidden" name="admin" value="1" />
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <br>
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <br>
                                <label for="divisi">{{ __('Divisi') }}</label>
                                <select name="divisi" class="form-control" required>
                                    <option value="IDS">IDS</option>
                                    <option value="VOIP">VOIP</option>
                                    <option value="WEB">WEB</option>
                                    <option value="GIS">GIS</option>
                                    <option value="IV">IV</option>
                                    <option value="Game Tech">Game Tech</option>
                                </select>
                                <br>
                                <label for="jobdesk">{{ __('Jobdesk') }}</label>
                                <input type="text" class="form-control" name="jobdesk" required/>
                                <br>
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <br>
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Buat admin</p>
                                    <p class="card-text">Admin dapat membuat postingan sesuai dengan divisi yang dipilih dan juga komen dengan label admin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Auth::user()->isAdmin)
        <ul class="nav nav-pills nav-justified mt-4">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#post">Post admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#crpost">Buat post</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active fade show container" id="post">
                @if($posts)
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div style="width: 100%; height: 200px">
                                        <object data="{{ asset('uploadfoto/'. $post->gambar)}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="card-img-top">
                                            <img src="{{asset('img/folded-newspaper.svg')}}" style='width:100%; height: 100%; object-fit: contain' class="card-img-top"/>
                                        </object>
                                    </div>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$post->post_title}}</h2>
                                        <p class="card-text">{{$post->divisi}}</p>
                                        <form action="{{route('admin.delete.post')}}" method="post" style="display: inline-block">
                                            @csrf
                                            <input type="hidden" name="id_post" value="{{$post->id_post}}" />
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#updatepost{{$post->id_post}}"><i class="fas fa-wrench"></i></button>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/show/post/{{$post->id_post}}" class="btn btn-info btn-block">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="updatepost{{$post->id_post}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update post</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.update.post') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id_post" value="{{$post->id_post}}" />
                                                <label for="title">Title</label>
                                                <input id="title" type="text" name="post_title" value="{{$post->post_title}}" class="form-control" required/>
                                                <br>
                                                <img src="{{ asset('uploadfoto/'. $post->gambar)}}" style='width:100%' class="card-img-top mt-3"/>
                                                <input class="form-control" type="file" name="gambar" />
                                                <label for="post_text">Post</label>
                                                <textarea id="post_text" name="post_text" class="form-control" required>
                                                    {{$post->post_text}}
                                                </textarea>
                                                <br>
                                                <button type="submit" class="btn btn-success">Update Post</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else 

                @endif
            </div>
            <div class="tab-pane fade container" id="crpost">
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('admin.create.post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="divisi" value="{{Auth::user()->divisi}}" />
                            <input type="hidden" name="id_user" value="{{Auth::user()->id}}" />
                            <label for="title">Title</label>
                            <input id="title" type="text" name="post_title" class="form-control" required/>
                            <br>
                            <input class="form-control" type="file" name="gambar" />
                            <label for="post_text">Post</label>
                            <textarea id="post_text" name="post_text" class="form-control" required></textarea>
                            <br>
                            <button type="submit" class="btn btn-success">Create Post</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Buat post</p>
                                <p class="card-text">Admin dapat membuat postingan sesuai dengan divisi yang dipilih dan juga komen dengan label admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else 
        <a href="#">Lihat Post</a>
    @endif
</div>
<br><br><br>
@endsection
