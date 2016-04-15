@extends('layouts.master')

@section('title')
	Jenjang Pendidikan
@endsection

@section('content')
	<div class="row">
    <div class="col-lg-12 cl-content">
            <h1 class="page-header">
                Form
                <small>Jejang Pendidikan</small>
            </h1>
            <p><strong>Isikan</strong> tentang history pendidikan yang pernah ada lalui</p>
        <p><a href="{{ URL::to('/pendidikan/form') }}" class="btn btn-success" role="button">Tambah Data</a></p>
        <div class="table-responsive">
        	<table class="table table-bordered table-hover">
        		<thead>
        			<tr>
        				<th>No</th>
        				<th>Nama Sekolah</th>
        				<th>Tingkat</th>
        				<th>Tahun Masuk</th>
        				<th>Tahun Lulus</th>
        				<th width="144">Perintah</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td>
        					1
        				</td>
        				<td>
        					Sekolah Dasar
        				</td>
        				<td>SD</td>
        				<td>2001</td>
        				<td>2005</td>
        				<td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-success edit">Ubah</a>
                                <a href="{{ URL::to('crud/hapus/') }}" class="btn btn-success">Hapus</a>
                            </div>
                        </td>
        			</tr>
        		</tbody>
        	</table>
        </div>
	</div>
	<section class="containt-main">
		<div class="col-md-6 col-md-offset-3">
			<ul style="width: 100%;">
            	<div style="width: 446.;">
            		<h4>
            		<strong>Pengalaman adalah Guru Terbaik</strong><br><small>Experience Is The Best Teacher</small>
            		</h4>
            		<br>
            		<p class="mutiara">Jadilah orang yang berguna untuk orang orang di sekitar dengan begitu anda mensyukuri nikmat yang di berikan oleh Allah SWT.</p>
            		<p class="mutiara">Janganlah kau menyombongkan diri atas apa yang telah kau miliki karena semua itu datang dari Allah SWT.</p>
            	</div>
            </ul>
		</div>
	</section>
	</div>
    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong>Edit</strong> Jejang Pendidikan</h4>
              </div>
              <div class="modal-body">
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
            {{ Form::close() }}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop