@extends('layouts.master')
@section('content')
 <!-- alert -->
 @if(session('sukses'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<i class="fa fa-check-circle"></i>
        {{session('sukses')}}
    </div>
    @endif  
<!-- Data pelanggan -->
<div class="justify">
    <!-- TOMBOL TAMBAH -->
    <div class="section-heading clearfix">
        <h2 class="section-title">Daftar Pelanggan</h2>
        <button class="btn btn-primary btn-sm right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
    </div>
    <br>
    <!-- AKHIR TOMBOL TAMBAH -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID.PEL</th>
                            <th>NAMA</th>
                            <th>TIPE ANGSURAN</th>
                            <th>DP</th>
                            <th>HARGA</th>
                            <th>TIPE / UKURAN</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data_pelanggan as $pelanggan)
                        <tr>
                            <td>PEL{{$pelanggan->id}}</td>
                            <td>{{$pelanggan->nama}}</td>
                            <td>{{$pelanggan->jenis_angsuran}}</td>
                            <td>Rp {{number_format($pelanggan->uang_muka)}},-</td>
                            <td>Rp {{number_format($pelanggan->harga)}},-</td>
                            <td>{{$pelanggan->tipe}}</td>
                            <td class="text-center">
                                <a href="/pelanggan/{{$pelanggan->id}}/profile" class="btn btn-default btn-sm">Lihat</a>
                                <a href="/pelanggan/{{$pelanggan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/pelanggan/{{$pelanggan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('hapus {{$pelanggan->nama}}')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>
   
    <!-- Modal -->
    <div class="row">
         <div class="col-6">     
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <!-- form -->
                            <form action="/pelanggan/create" method="POST">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">No.Telp</label>
                                    <input name="no_telp" type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="" rows="4"></textarea>
                                </div>
                                <div class="form-group">
								<label class="control-label">Jenis Angsuran</label>
								<select name="jenis_angsuran" class="form-control">
									<option value="Rumah" @if($pelanggan->jenis_angsuran == 'Rumah') selected @endif>Rumah</option>
									<option value="Tanah" @if($pelanggan->jenis_angsuran == 'Tanah') selected @endif>Tanah</option>
								</select>
							    </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DP / Uang Muka</label>
                                    <input name="uang_muka" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Harga</label>
                                    <input name="harga" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tipe / Ukuran</label>
                                    <input name="tipe" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
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

@stop

    