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
        <td><a href="#">Laporan</a></td>
    </tr>
</table>
<center><h1>Laporan</h1></center>
<form action="{{ route('laporan.result') }}" method="post">
    @csrf
    <table class="table" cellpadding="5">
        <tr>
            <td>Semester</td>
            <td>:</td>
            <td>
                <select name="semester_id" required>
                    <option value="">-- Pilih Semester --</option>
                    @foreach($semesters as $semester)
                        <option value="{{ $semester->id }}">{{ $semester->nama }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>Pembayaran Item</td>
            <td>:</td>
            <td>
                <select name="pembayaran_item_id" required>
                    <option value="">-- Pilih Item</option>
                    @foreach($items as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Cek</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
