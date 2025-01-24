<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">User Data</h1>
    <table border="1" cellpadding="5" cellspacing="0" class="table">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($register  as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email}}</td>
                    <td><img src="{{ $data->image }}" alt="" width="100" height="100"></td>
                    <td>
                        <a href="{{ route('edit', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('destroy', $data->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>