<h3>
    <center>Laporan Data Santri</center>
</h3>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>#ID</th>
        <th>Nama Satri</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No. Hp</th>
    </tr>
    @foreach ($santri as $s)
        <tr>
            <td>{{ $s->id_santri }}</td>
            <td>{{ $s->nm_santri }}</td>
            <td>{{ $s->tmp_lahir }}</td>
            <td>{{ $s->tgl_lahir }}</td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->no_hp }}</td>
        </tr>
    @endforeach
</table>
