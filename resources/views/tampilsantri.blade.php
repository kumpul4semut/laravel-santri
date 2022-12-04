@extends('master')

@section('konten')
    <h3>Tampil Data Satri</h3>
    <a class="btn btn-success" href="{{ route('tambahsantri') }}"><i class="fa fa-plus"></i> Tambah Santri</a>
    <a class="btn btn-default" href="{{ route('cetaksantri') }}" target="_blank"><i class="fa fa-print"></i> Cetak PDF</a>
    <br><br>
    <table class="table table-bordered table-hover">
        <tr>
            <th>#ID</th>
            <th>Nama Satri</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Aksi</th>
        </tr>
        @foreach ($santri as $s)
            <tr>
                <td>{{ $s->id_santri }}</td>
                <td>{{ $s->nm_santri }}</td>
                <td>{{ $s->tmp_lahir }}</td>
                <td>{{ $s->tgl_lahir }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->no_hp }}</td>
                <td>
                    <a href="/santri/ubah/{{ $s->id_santri }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                    <a href="/santri/hapus/{{ $s->id_santri }}"
                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i
                            class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
