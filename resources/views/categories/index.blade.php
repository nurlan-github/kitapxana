<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Categories</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="">Create</label><br>
        <input type="text" name="name">
        <input type="submit"><br>
        <br>
    </form>
    <table border="1">
        <tr>
            <td>№</td>
            <td>name</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td><button type="submit"><a href="{{ route('categories.edit',$category->id) }}">edit</a></button></td>
            <td><form action="{{ route('categories.destroy', $category) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
                </form></td>
            </tr>
        @endforeach
    </table>
    <a href="{{ '/' }}">back</a>
</body>
</html>