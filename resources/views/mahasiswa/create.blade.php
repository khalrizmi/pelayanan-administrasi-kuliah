<html>
<head>
    <title>Tambah Mahasiswa</title>
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
    <h2>Tambah Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        <table cellspacing="10">
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><input type="text" name="nomor_telepon" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan_id" required>
                        <option value="">-- Pilih Jurusan --</option>
                        @foreach($jurusans as $jurusan)
                            <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
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
