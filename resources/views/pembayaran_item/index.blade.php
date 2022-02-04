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
<center><h1>Pembayaran item</h1></center>
<center><a href="{{ route('pembayaran_item.create') }}">Tambah</a></center>
<br>
<table class="table" cellpadding="5" border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Harga</td>
        <td>Aksi</td>
    </tr>
    @foreach($items as $item)
        <tr>
            <td>
                {{ $loop->index + 1 }}
            </td>
            <td>
                {{ $item->nama }}
            </td>
            <td>
                {{ $item->harga }}
            </td>
            <td>
                <a href="{{ route('pembayaran_item.edit', $item->id) }}">Ubah</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
