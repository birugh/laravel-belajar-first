<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Create page</h1>
    <form action="{{ route('guru.store') }}" method="POST">
        @csrf
        <title>Nama Guru</title>
        <input type="text" name="nama_guru">
        <button>Submit</button><br><br>
        <a href="/">Back</a>
    </form>
</body>
</html>
