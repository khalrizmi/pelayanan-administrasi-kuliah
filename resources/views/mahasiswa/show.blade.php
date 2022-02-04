<html>
    <head>
        <title>Detail Mahasiswa</title>
        <style>
            .container {
                margin: 0 auto;
                padding: 16px 80px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <a href="{{ route('mahasiswa.index') }}">Kembali</a>
            <h2>Informasi Mahasiswa</h2>
            <table cellspacing="10">
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->nama }}</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->jurusan->nama }}</td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td>{{ $mahasiswa->semester->nama }}</td>
                </tr>
            </table>

            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Ubah</a>

            <h2>Riwayat Pembayaran</h2>
            <table border="1" cellpadding="5">
                <tr>
                    <td>No</td>
                    <td>Pembayaran</td>
                    <td>Harga</td>
                    <td>Tanggal Bayar</td>
                    <td>Keterangan</td>
                </tr>
                @foreach($pembayarans as $pembayaran)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $pembayaran->item->nama }}</td>
                        <td>{{ $pembayaran->item->harga }}</td>
                        <td>{{ \Carbon\Carbon::parse($pembayaran->created_at)->diffForHumans(); }}</td>
                        <td>Lunas</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
