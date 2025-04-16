<!DOCTYPE html>
<html>
<head>
    <title>Data Level Pengguna</title>
</head>
<body>
    <h1>Data Level Pengguna</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
            <th>Aksi</th> <!-- Kolom tombol -->
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->level_id }}</td>
            <td>{{ $d->level_kode }}</td>
            <td>{{ $d->level_nama }}</td>
            <td>
                <!-- Tombol Detail -->
                <a href="{{ route('level.show', $d->level_id) }}" style="color: white; background-color: deepskyblue; padding: 5px 10px; text-decoration: none;">Detail</a>

                <!-- Tombol Edit -->
                <a href="{{ route('level.edit', $d->level_id) }}" style="color: white; background-color: orange; padding: 5px 10px; text-decoration: none;">Edit</a>

                <!-- Tombol Hapus -->
                <form action="{{ route('level.destroy', $d->level_id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus level ini?')" style="color: white; background-color: crimson; padding: 5px 10px;">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
