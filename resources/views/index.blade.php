<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <a href="/create">Create</a>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama Guru</td>
                <td>Created at</td>
                <td>Updated at</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
            <td>{{ $data->id }}</td>
                <td>{{ $data->nama_guru }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>
                    <form action="{{ route('guru.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <a href="{{ route('guru.edit', $data->id) }}" type="/"><button>Edit</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
