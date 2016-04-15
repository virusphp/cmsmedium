@extends('layouts.masterlogin')

@section('title')
	Admin Login | Portofolio
@endsection

@section('content')
	<div class="kotak-login">
			<div class="header">							
				<h2 class="text-center"><img class="logo-img" width="65" src="./aktiva/img/logo-canting.png" alt="logo"/> | <img class="logo-img" width="200" src="./aktiva/img/logo-cc.png" alt="logo"/></h2>
			</div>
			{{ Form::open(array('url' => 'login', 'method' => 'POST')) }}
			<div class="form-group fr">
				{{-- label('for', 'value') --}}
				{{ Form::label('nama' , 'Nama Pengguna') }}
				{{-- text('name','value', array('class' => 'bebas')) --}}
				{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Masukan nama pengguna')) }}
			</div>
			<div class="form-group fr">
				{{-- label('for', 'value') --}}
				{{ Form::label('password' , 'Kata Sandi') }}
				{{-- text('name','value', array('class' => 'bebas')) --}}
				{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Masukan kata sandi akun')) }}
			</div>
			{{ Form::submit('Masuk', array('class' => 'form-control btn btn-login')) }}
			<div class="clearfix"> </div>
			{{ form::close() }}
			<hr/>

			<div class="copyright">
				<sup ><small>Content Management System</small></sup>
				<p> Hak cipta&copy; 2016 CC, org. </p>
			</div>
	</div>


@stop