<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>

<body>
    <h1>Edit User</h1>
    <br>
    <br>
    <form action="{{ route('user.update', ['id' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nama</label>
        <br>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <br>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="email" value="{{ $user->email }}">
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
            <option value="administrator" {{ $user->role == 'administrator' ? 'selected' : '' }}>Administrator</option>
            <option value="pendaftaran"{{ $user->role == 'pendaftaran' ? 'selected' : '' }}>Pendaftaran</option>
            <option value="keuangan"{{ $user->role == 'keuangan' ? 'selected' : '' }}>Keuangan</option>
            <option value="perawat"{{ $user->role == 'perawat' ? 'selected' : '' }}>Perawat</option>
        </select>
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
