<html>
<head>
    <title>Edit Pembayaran Item</title>
    <style>
        .container {
            margin: 0 auto;
            padding: 16px 80px;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="{{ route('pembayaran_item.index') }}">Kembali</a>
    <h2>Edit Pembayaran Item</h2>
    <form action="{{ route('pembayaran_item.update', $item->id) }}" method="post">
        @csrf
        <table cellspacing="10">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="{{ $item->nama }}" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="harga" value="{{ $item->harga }}" required></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
        @if($errors->any())
            <font color="red">{{$errors->first()}}</font>
        @endif
    </form>
</div>
</body>
</html>
