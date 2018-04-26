@extends('layouts.app')

@section('content')

<div class="container">
	<br>
	<div class="row mt-5">
		<div class="col-md-8">
			<h1 class='mt-4'>{{$tampil->post_title}}</h1>
			<h3 class='mt-4'>{{$tampil->divisi}}</h3>
			<hr>
			<div style="width: 100%; height: 300px">
				<object data="{{ asset('uploadfoto/'. $tampil->gambar)}}" type="image/png" style='width:100%; height: 100%; object-fit: cover' class="card-img-top">
					<img src="{{asset('img/folded-newspaper.svg')}}" style='width:100%; height: 100%; object-fit: contain' class="card-img-top"/>
				</object>
			</div>
			<hr>
			<p>{{$tampil->post_text}}</p>
			<hr>
			<h3>Komentar</h3>
			@if($comment)
				@foreach($comment as $komen)
					<?php $user = DB::select("SELECT * FROM users WHERE id=(?)", [$komen->id_user]) ?>
					<div class="card">
						<div class="card-body">{{$komen->isi_komentar}}</div>
						<div class="card-footer">
							<p>
								Commented by - <?php echo $user[0]->name ?>
								@if($user[0]->isAdmin)
									(admin)
								@endif
							</p>
							@if(Auth::user())
								@if(Auth::user()->id == $komen->id_user)
									<form action="{{route('post.delete.comment')}}" method="post" style="display: inline-block">
										<input type='hidden' name='_token' value="{{csrf_token()}}" />
										<input type="hidden" name="id_hapus" value="{{$komen->id}}" />
										<input type='hidden' name='id_post' value="{{$tampil->id_post}}" />
										<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
									</form>
								@endif
							@endif
						</div>
					</div>
					<br>
				@endforeach
			@else
				<h2>Belum ada komentar</h2>
			@endif
			<hr>
			@if(Auth::user())
				<form action="{{route('post.comment')}}" method='post'>
					<input type='hidden' name='_token' value="{{csrf_token()}}" />
					<input type='hidden' name='id_user' value="{{Auth::user()->id}}" />
					<input type='hidden' name='id_post' value="{{$tampil->id_post}}" />
					<textarea name='comment' class='form-control' placeholder='Comment Post ini' required></textarea>
					<br>
					<button type='submit' class='btn btn-success'><i class="far fa-comments"></i> Comment</button>
				</form>
			@endif
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body text-center">
					<h1 class="card-title">Posted by</h1>
					<h1 class="card-title">{{$tampil->divisi}}</h1>
					<h1 class="card-title">Admin</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
@endsection
