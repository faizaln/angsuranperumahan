@extends('layouts.master')
@section('content')
<!-- alert -->
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
        <div class="section-heading clearfix">
            <h2 class="section-title">Edit Pelanggan</h2>
        </div>
    <div class="row">
        <div class="col-lg-12">
        <form action="/pelanggan/{{$pelanggan->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" value="{{$pelanggan->nama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                 </div>
                 <div class="form-group">
                     <label for="exampleFormControlTextarea1">No.Telp</label>
                     <input name="no_telp" value="{{$pelanggan->no_telp}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                 <div class="form-group">
                     <label for="exampleFormControlTextarea1">Alamat</label>
                     <textarea name="alamat" value="{{$pelanggan->alamat}}" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pelanggan->alamat}}</textarea>
                  </div>
                  <div class="form-group">
						<label class="control-label">Jenis Angsuran</label>
						<select name="jenis_angsuran" class="form-control">
							<option value="Rumah" @if($pelanggan->jenis_angsuran == 'Rumah') selected @endif>Rumah</option>
							<option value="Tanah" @if($pelanggan->jenis_angsuran == 'Tanah') selected @endif>Tanah</option>
						</select>
				  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">DP</label>
                      <input name="uang_muka" value="{{$pelanggan->uang_muka}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                 </div>
                 <div class="form-group">
                     <label for="exampleInputPassword1">Harga</label>
                     <input name="harga" value="{{$pelanggan->harga}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                 </div>
                 <div class="form-group">
                     <label for="exampleInputPassword1">Tipe</label>
                     <input name="tipe" value="{{$pelanggan->tipe}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                 </div>    
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Ubah</button> &nbsp;
                    <a href="/pelanggan" class="btn btn-default btn-sm">Batal</a>
                 </div>
        </form>
        </div>
    </div>
@endsection

