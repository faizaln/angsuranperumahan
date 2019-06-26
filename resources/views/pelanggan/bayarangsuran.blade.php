@extends('layouts.master')
@section('content')
<!-- alert -->
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
        <div class="section-heading clearfix">
            <h2 class="section-title">Edit Angsuran</h2>
        </div>
    <div class="row">
        <div class="col-lg-12">
        <form action="/pelanggan/{{$pelanggan->id}}/update" method="POST">
            {{csrf_field()}}
                <fieldset disabled>
                    <div class="form-group">
                       <label for="disabledTextInput">Angsuan Ke</label>
                       <input type="text" id="disabledTextInput" class="form-control" value="{{$no +1}}">
                   </div>
                 </fieldset>
                 <label>Tgl.Bayar Angsuran</label>
                    <div class="input-group date" name="tgl_bayar" data-date-autoclose="true" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        <input type="text" value="{{$angsuran->tgl_angsuran}}" class="form-control">
				        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div><br>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Besar Angsuran</label>
                        <input value="{{$angsuran->besar_angsuran}}" name="besar_angsuran" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Ubah</button> &nbsp;
                    <a href="/pelanggan" class="btn btn-default btn-sm">Batal</a>
                 </div>
        </form>
        </div>
    </div>
@endsection

