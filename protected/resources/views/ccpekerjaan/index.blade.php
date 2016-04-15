@extends('layouts.master')

@section('title')
	Pengalaman Kerja
@endsection

@section('content')
	<div class="row">
    <div class="col-lg-12 cl-content">
            <h1 class="page-header">
                Form
                <small>Pengalaman Kerja</small>
            </h1>
            <p><strong>Isikan</strong> tentang history Pengalaman kerja yang pernah ada lalui</p>
        <p><a href="{{ URL::to('/pekerjaan/form') }}" class="btn btn-success" role="button">Tambah Data</a></p>
        <div class="table-responsive">
        	<table class="table table-bordered table-hover">
        		<thead>
        			<tr>
        				<th>No</th>
                        <th>Posisi</th>
                        <th>Nama Perusahan / Lembaga</th>
                        <th>Dari Tahun</th>
                        <th>Sampai Tahun</th>
                        <th >Tugas dan Tanggaung Jawah</th>
                        <th width="144">Perintah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Kepala Dinas
                        </td>
                        <td>DPPK</td>
                        <td>2000</td>
                        <td>2015</td>
                        <td>Melakukan auditing terhadap staf-staf dan menandatangani berkas pekerjaan, membantu dalam analisa rekapitulasi kegiatan dan menganalisa hasil kegiatan Renja dalam mengasilkan suatu pekerjaan yang bermanfaat bagi masyarakat</td>
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
            		<p class="mutiara">Seorang Istri adalah karunia yang sangat indah yang di berikan oleh Allah SWT karena istri adalah bagian dalam hidup kita.</p>
            		<p class="mutiara">Istri mempunyai peranan penting dalam pendidikan anak. Karena dari seroang istrilah anak-anak cerdas dapat terlahir. Subahannallah.</p>
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
                <h4 class="modal-title"><strong>Edit</strong> Pengalaman Kerja</h4>
              </div>
              <div class="modal-body">
                {{ Form::open(array('url' => 'apasaja', 'method' => 'PUT', 'class' => 'forms')) }}
                {!! csrf_field() !!}
                <div class="form-group">
                {{ Form::label('posisi', 'Posisi') }}
                {{ Form::text('posisi', null, array('class' => 'form-control', 'placeholder' => 'Masukan posisi pekerjaan')) }}
                </div>
                 <div class="form-group">
                {{ Form::label('namaperusahaan', 'Nama Perusahan atau Lembaga') }}
                {{ Form::text('perusahan', null, array('class' => 'form-control', 'placeholder' => 'Masukan Nama Perusahaan atau Lembaga')) }}
                </div>
                <div class="form-group">
                {{ Form::label('daritahun', 'Dari Tahun') }}
                {{ Form::text('daritahun', null, array('class' => 'form-control', 'placeholder' => 'Masukan tanggal masuk bekerja')) }}
                </div>
                <div class="form-group">
                {{ Form::label('sampaitahun', 'Sampai Tahun') }}
                {{ Form::text('sampaitahun', null, array('class' => 'form-control', 'placeholder' => 'Masukan tanggal selesai bekerja')) }}
                </div>
                <div class="form-group">
                {{ Form::label('tugas', 'Tugas dan Tanggung jawab') }}
                {{ Form::textarea('tugas', null, array('class' => 'form-control', 'placeholder' => 'Masukan tugas dan tanggung jawa', 'rows' => '5')) }}
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