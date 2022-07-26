<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Faculties</h1>
    <form action="{{ route('faculties.store') }}" method="POST">
        <input type="text" name="name" placeholder="name"><br>
        <br>
        <button type="submit">create</button><br>
        <br>
    </form>
    <table border="1">
        <tr>
            <td>#</td>
            <td>name</td>
            <td>view groups</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
        @foreach($faculties as $faculty)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $faculty->name }}</td>
            <td></td>
            <td><button type="submit"><a href="{{ route('faculties.edit',$faculty->id) }}"></a></button></td>
            <td>
                <form action="{{ route('faculties.destroy', $faculty) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>