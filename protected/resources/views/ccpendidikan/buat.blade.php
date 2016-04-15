@extends('layouts.master')

@section('title')
	Input Jenjang Pendidikan
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
					Input
					<small>Jenjang Pendidikan</small>
				</h1>
			<div class="col-md-6 col-md-offset-3">
			{{ Form::open(array('url' => 'apasaja', 'method' => 'PUT', 'class' => 'forms')) }}
				{!! csrf_field() !!}
				<div class="form-group">
				{{ Form::label('nama', 'Nama Sekolah') }}
				{{ Form::text('namasekolah', null, array('class' => 'form-control', 'placeholder' => 'Masukan nama sekolah')) }}
				</div>
				<div class="form-group">
				{{ Form::label('tingkat', 'Tingkat') }}
				{{ Form::select('tingkat', array('sd' => 'SD', 'smp' => 'SMP', 'sma' => 'SMA/SMK', 'universitas' => 'UNIVERSITAS/INSTITUT'), null, array('class' => 'form-control', 'placeholder' => 'Pilih tingkat pendidikan')) }}
				</div>
				<div class="form-group">
				{{ Form::label('tahunmasuk', 'Tahun Masuk') }}
				{{ Form::text('tahunmasuk', null, array('class' => 'form-control', 'placeholder' => 'Masukan tanggal masuk sekolah')) }}
				</div>
				<div class="form-group">
				{{ Form::label('tahunlulus', 'Tahun Lulus') }}
				{{ Form::text('tahun lulus', null, array('class' => 'form-control', 'placeholder' => 'Masukan tanggal lulus sekolah')) }}
				</div>
				<div class="form-group kanan">
				{{ Form::submit('SIMPAN', array('class' => 'btn btn-success', 'id' => 'simpan')) }}
				{{ Form::submit('BATAL', array('class' => 'btn btn-success', 'id' => 'batal')) }}
				</div>
			{{ Form::close() }}
			</div>
		</div>
	</div>
@stop