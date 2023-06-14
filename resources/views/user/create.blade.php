<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>

<body>
    <h1>Create User</h1>
    <br>
    <br>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="name">Nama</label>
        <br>
        <input type="text" name="name" id="name">
        <br>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <label for="role">Role</label>
        <br>
        <select name="role" id="role">
            <option value="administrator">Administrator</option>
            <option value="pendaftaran">Pendaftaran</option>
            <option value="keuangan">Keuangan</option>
            <option value="perawat">Perawat</option>
        </select>
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
