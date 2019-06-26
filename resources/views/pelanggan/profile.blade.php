@extends('layouts.master')
@section('content')
<!-- MAIN -->
    <!-- TOMBOL TAMBAH -->
    <div class="section-heading clearfix">
        <h2 class="section-title">Informasi Pelanggan</h2>
        <button class="btn btn-primary btn-sm right" data-toggle="modal" data-target="#exampleModal">Bayar</button>
    </div>
    <br>
	<!-- AKHIR TOMBOL TAMBAH -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#myprofile" role="tab" data-toggle="tab" aria-expanded="true">Profil</a></li>
		<li class=""><a href="#account" role="tab" data-toggle="tab" aria-expanded="false">Angsuran</a></li>
	</ul>
	<form>
		<div class="tab-content content-profile">
			<!-- MY PROFILE -->
		<div class="tab-pane fade active in" id="myprofile">
	    <!-- Tabel Informasi Pelanggan -->
      <br>
        <table class="table table-hover">
          <tbody>
              <tr>
                <th>ID Pel</th>
                  <td>PEL{{$pelanggan->id}}</td>
                <th>Jenis Angsuran</th>
                  <td>{{$pelanggan->jenis_angsuran}}</td>
              </tr>
              <tr>
                <th>Nama</th>
                  <td>{{$pelanggan->nama}}</td>
                <th>Tipe / Ukuran</th>
                  <td>{{$pelanggan->tipe}}</td>
              </tr>
              <tr>
                <th>No.Telp</th>
                  <td>{{$pelanggan->no_telp}}</td>
                <th>DP</th>
                  <td>Rp{{number_format($pelanggan->uang_muka)}},-</td>
              </tr>
              <tr>
                <th>Alamat</th>
                  <td>{{$pelanggan->alamat}}</td>
                <th>Harga</th>
                  <td>Rp{{number_format($pelanggan->harga)}},-</td>
              </tr>
          </tbody>
          </table>
	      <!-- Akhir Tabel Informasi Pelanggan -->
			</div>
			<!-- END MY PROFILE -->
			<!-- ACCOUNT -->
			<div class="tab-pane fade" id="account">
				<!-- Tabel Angsuran -->
	<div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
							              <th>Angsuran Ke</th>
                            <th>Tgl.Bayar</th>
                            <th>Besar Angsuran</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $no = 0;?>
					@foreach($pelanggan->angsuran as $angsuran)
					<?php $no++ ;?>
                        <tr>
							<td>{{$no}}</td>
                            <td>{{$angsuran->tgl_angsuran}}</td>
							<td>Rp{{number_format($angsuran->besar_angsuran)}},-</td>
					
                            <td class="text-center">
                                <a href="/pelanggan/{{$angsuran->pelanggan_id}}/bayarangsuran" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('hapus {{$pelanggan->nama}}')">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
	</div>
	<!-- Akhiran Tabel Angsuran -->			
			</div>
			<!-- END ACCOUNT -->
		</div>
	</form>
<!-- AKHIR -->
<!-- Modal -->
<div class="row">
         <div class="col-6">     
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <!-- form -->
                            <form action="/pelanggan/create" method="POST">
                            {{csrf_field()}}
                            <fieldset disabled>
                                <div class="form-group">
                                  <label for="disabledTextInput">Angsuan Ke</label>
                                  <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$no +1}}">
                               </div>
                            </fieldset>
                                <label>Tgl.Bayar Angsuran</label>
                                <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                  <input type="text" class="form-control">
							                  	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							                  </div><br>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Besar Angsuran</label>
                                    <input name="no_telp" type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                        </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
 </div>
 <!-- AKHIR MODAL -->
@stop