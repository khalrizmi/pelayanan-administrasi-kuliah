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
<center><h1>Pembayaran</h1></center>
<form action="{{ route('pembayaran.pay') }}" method="post">
    @csrf
    <table class="table" cellpadding="5">
        <tr>
            <td>Mahasiswa</td>
            <td>:</td>
            <td>
                <select name="user_id" required>
                    <option value="">-- Pilih Mahasiswa --</option>
                    @foreach($mahasiswas as $mahasiswa)
                        <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nim }} - {{ $mahasiswa->nama }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>Pembayaran</td>
            <td>:</td>
            <td>
                <select name="pembayaran_item_id" required>
                    <option value="">-- Pilih Pembayaran --</option>
                    @foreach($items as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->harga }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Bayar</button>
            </td>
        </tr>
    </table>
</form>

@if($errors->any())
    <center><font color="red">{{$errors->first()}}</font></center>
@endif
</body>
</html>
