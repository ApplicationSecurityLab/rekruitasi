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
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <object data="" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('img/user.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$user->name}}</h2>
                                        <h4 class="card-text">Divisi</h4>
                                        <h4 class="card-text">Jobdesk</h4>
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
                                    <object data="" type="image/png" style='width:100%' class="card-img-top">
                                        <img src="{{asset('img/folded-newspaper.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                    </object>
                                    <div class="card-body">
                                        <h2 class="card-title">{{$post->post_title}}</h2>
                                        <p class="card-text">{{$post->divisi}}</p>
                                        <button class="btn btn-danger">Delete</button>
                                        <button class="btn btn-info">Update</button>
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
                        <form action="{{ route('admin.create.post') }}" method="post">
                            @csrf
                            <input type="hidden" name="divisi" value="{{Auth::user()->divisi}}" />
                            <input type="hidden" name="id_user" value="{{Auth::user()->id}}" />
                            <label for="title">Title</label>
                            <input id="title" type="text" name="post_title" class="form-control" required/>
                            <br>
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
@endsection
