@extends('master')

@section('konten')
    <h3>Form Input Santri</h3>
    <form method="post" action="{{ route('simpansantri') }}">
        @csrf
        <div class="form-group">
            <label>Nama Santri</label>
            <input type="text" name="nm_santri" class="form-control" placeholder="Nama Santri" required="">
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" required="">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required="">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat" required=""></textarea>
        </div>
        <div class="form-group">
            <label>No. Hp</label>
            <input type="text" name="no_hp" class="form-control" placeholder="No. Hp" required="">
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
        </div>
    </form>
@endsection
