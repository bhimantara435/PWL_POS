<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data User</title>
</head>
<body>

    <h1>Form Tambah Data User</h1>

    <form method="post" action="/user/tambah_simpan">
        {{ csrf_field() }}

        <label>Username</label><br>
        <input type="text" name="username" placeholder="Masukkan Username"><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" placeholder="Masukkan Nama"><br><br>

        <label>Password</label><br>
        <input type="password" name="password" placeholder="Masukkan Password"><br><br>

        <label>Level ID</label><br>
        <input type="number" name="level_id" placeholder="Masukkan ID Level"><br><br>

        <input type="submit" class="btn btn-succes" value="Simpan">
    </form>

</body>
</html>
