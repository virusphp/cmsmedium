@extends('layouts.master')

@section('title')
	Input Materi
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
					Input
					<small>Materi</small>
				</h1>
			<div class="col-md-8 col-md-offset-2">
			{{ Form::open(array('url' => 'apasaja', 'method' => 'PUT', 'class' => 'forms')) }}
				{!! csrf_field() !!}
				<div class="form-group">
				{{ Form::label('judul', 'Judul') }}
				{{ Form::text('judul', null, array('class' => 'form-control', 'placeholder' => 'Masukan Posisi Jabatan')) }}
				</div>
				<div class="form-group">
				{{ Form::label('keterangan', 'Keterangan') }}
				{{ Form::text('keterangan', null, array('class' => 'form-control', 'placeholder' => 'Masukan nama perusahaan atau instansi')) }}
				</div>
				<div class="form-group">
				{{ Form::label('gambar', 'gambar') }}
				{{ Form::text('gambar', null, array('class' => 'form-control', 'placeholder' => 'Masukan tahun masuk')) }}
				</div>
				<div class="form-group">
                {{ Form::label('isimateri', 'Materi') }}
                {{ Form::textarea('isimateri', null, array('class' => 'form-control', 'placeholder' => 'Masukan tugas dan tanggung jawa', 'rows' => '7')) }}
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