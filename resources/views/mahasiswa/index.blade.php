<html>
    <head>
        <title>Mahasiswa</title>
        <style>
            .table {
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <table class="table" cellspacing="20">
            <tr>
                <td><a href="{{ route('mahasiswa.index') }}">Mahasiwa</a></td>
                <td><a href="{{ route('pembayaran_item.index') }}">Pembayaran Item</a></td>
                <td><a href="{{ route('pembayaran.index') }}">Pembayaran</a></td>
                <td><a href="{{ route('laporan.index') }}">Laporan</a></td>
            </tr>
        </table>
        <center><h1>Mahasiswa</h1></center>
        <center><a href="{{ route('mahasiswa.create') }}">Tambah</a></center>
        <br>
        <br>
        <table class="table" cellpadding="5" border="1">
            <tr>
                <td>Nim</td>
                <td>Nama</td>
                <td>Jurusan</td>
                <td>Semester</td>
                <td>Aksi</td>
            </tr>
            @foreach($mahasiswas as $mahasiswa)
                <tr>
                    <td>
                        {{ $mahasiswa->nim }}
                    </td>
                    <td>
                        {{ $mahasiswa->nama }}
                    </td>
                    <td>{{ $mahasiswa->jurusan->nama }}</td>
                    <td>{{ $mahasiswa->semester->nama }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}">Detail</a>
                        <a href="{{ route('mahasiswa.destroy', $mahasiswa->id) }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
