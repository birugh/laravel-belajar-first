<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Form</h1>
    <form action="{{ route('guru.update', $guru->id) }}" method="POST">
        @method('PUT')
        @csrf
        ID: <input type="number" disabled value="{{ $guru->id }}"><br>
        Nama Guru: <input type="text" name="nama_guru" value={{ $guru->nama_guru }}><br>
        Created at: <input type="text" disabled value="{{ $guru->created_at }}"><br>
        Updated at: <input type="text" disabled value="{{ $guru->updated_at }}"><br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('guru.index') }}"><button>Cancel</button></a>
</body>
</html>
