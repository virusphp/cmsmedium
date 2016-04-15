@extends('layouts.master')

@section('title')
	Input Pengelaman kerja
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
					Input
					<small>Pengalaman Kerja</small>
				</h1>
			<div class="col-md-6 col-md-offset-3">
			{{ Form::open(array('url' => 'apasaja', 'method' => 'PUT', 'class' => 'forms')) }}
				{!! csrf_field() !!}
				<div class="form-group">
				{{ Form::label('posisi', 'Posisi') }}
				{{ Form::text('posisi', null, array('class' => 'form-control', 'placeholder' => 'Masukan Posisi Jabatan')) }}
				</div>
				<div class="form-group">
				{{ Form::label('nmperusahaan', 'Nama Perusahaan') }}
				{{ Form::text('nmperusahaan', null, array('class' => 'form-control', 'placeholder' => 'Masukan nama perusahaan atau instansi')) }}
				</div>
				<div class="form-group">
				{{ Form::label('daritahun', 'Dari Tahun') }}
				{{ Form::text('daritahun', null, array('class' => 'form-control', 'placeholder' => 'Masukan tahun masuk')) }}
				</div>
				<div class="form-group">
				{{ Form::label('sampaitahun', 'Sampai Tahun') }}
				{{ Form::text('sampaitahun', null, array('class' => 'form-control', 'placeholder' => 'Masukan tahun selesai')) }}
				</div>
				<div class="form-group">
                {{ Form::label('tugas', 'Tugas dan Tanggung jawab') }}
                {{ Form::textarea('tugas', null, array('class' => 'form-control', 'placeholder' => 'Masukan tugas dan tanggung jawa', 'rows' => '5')) }}
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