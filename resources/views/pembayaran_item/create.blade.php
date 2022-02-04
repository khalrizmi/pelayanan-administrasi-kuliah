<html>
<head>
    <title>Tambah Pembayaran Item</title>
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
    <h2>Tambah Pembayaran Item</h2>
    <form action="{{ route('pembayaran_item.store') }}" method="post">
        @csrf
        <table cellspacing="10">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="harga" required></td>
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
